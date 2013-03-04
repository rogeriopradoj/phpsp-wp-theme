class other
{
    $packages = ["curl", "unzip", "tree"]
    package
    {
        $packages:
            ensure  => present,
            require => Exec['apt-get update']
    }
}
