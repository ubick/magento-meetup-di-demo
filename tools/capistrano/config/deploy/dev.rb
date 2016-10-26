set :deploy_to, "/tmp/test" # Deploys to VM not presently supported
set :branch, "develop"

ssh_options[:keys] = [
  File.expand_path(File.join('..', '..', '..', 'vagrant', '.vagrant', 'machines', 'default', 'virtualbox', 'private_key'), __dir__),
  File.join(ENV['HOME'], '.vagrant.d', 'insecure_private_key')
].select { |file| File.exist?(file) }.take(1)
server "vagrant@magento1.dev", :app, :primary => true
