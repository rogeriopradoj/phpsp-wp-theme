class php 
{
    $packages = [
        "php5",
        "libapache2-mod-php5",
        "php5-cli",
        "php5-cgi",
        "php5-mysqlnd", 
        "php5-gd",
        "php5-curl",
        "php5-memcache", 
        "php-apc", 
        
    ]
    
    package 
    { 
        $packages:
            ensure  => present,
            require => Exec['apt-get update']
    }
  
}
