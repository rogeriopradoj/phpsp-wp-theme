# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant::Config.run do |config|
  config.vm.host_name = "phpsp-dev"
  config.vm.box = "precise32"
  config.vm.box_url = "http://files.vagrantup.com/precise32.box"
  #config.vm.customize ["modifyvm", :id, "--rtcuseutc", "on"]
  #config.ssh.max_tries = 10
  #config.vm.network :hostonly, "192.168.33.10"
  config.vm.forward_port 80, 8088
  config.vm.forward_port 3306, 8889
  config.vm.host_name = "phpsp.dev"

  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "puppet/manifests"
    puppet.manifest_file  = "site.pp"
    puppet.module_path = "puppet/modules"
    #puppet.options = "--verbose"
  end

  config.vm.provision :shell, :path => "puppet/scripts/enable_remote_mysql_access.sh"
end
