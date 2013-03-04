class wordpress
{
    $wp_dir = '/var/www/phpsp-blog'
    $www_user = 'vagrant'
    $www_group = 'vagrant'
    $mysql_user = 'root'
    $mysql_pass = 'root'
    $mysql_db = 'wordpress'

    package { 'git' :
        ensure => present,
        require => Exec['apt-get update']
    }

    file { $wp_dir :
        ensure => directory,
        mode => 0644,
        owner => $www_user,
        group => $www_group,
        require => Package['apache2']
    }

    exec { 'install-wordpress' :
        command => "git clone -q git://github.com/WordPress/WordPress.git ${$wp_dir}",
        onlyif => "test ! -f ${$wp_dir}/wp-config.php",
        require => [File[$wp_dir], Package['git']]
    }

    file { "$wp_dir/wp-content/themes/phpsp" :
        ensure => present,
        owner => $www_user,
        group => $www_group,
        recurse => true,
        source => '/vagrant',
        require => Exec['install-wordpress']
    }

    exec { "wordpress-database" :
        command => "mysqladmin -u${$mysql_user} -p${$mysql_pass} create ${$mysql_db}",
        require => Exec['install-wordpress']
    }

    file { "${$wp_dir}/wp-config.php" :
        ensure  => present,
        mode => 0644,
        owner => $www_user,
        group => $www_group,
        source  => "/vagrant/.puppet/templates/wp-config.php",
        require => Exec['wordpress-database'],
    }
}