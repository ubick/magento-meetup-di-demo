# Magento Meetup DI Demo 

## What is the route of the demo controller?

http://magento1.dev/demo

## How to run unit tests?

```bash
hem vm ssh && bin/phpspec run
```

## Clone the project

Clone the project into your local file system:

```bash
git clone git@github.com:ubick/magento-meetup-di-demo
```

## Install Dependencies

1. Install the latest version of Hem from https://github.com/inviqa/hem

2. Install the latest version of Vagrant from [http://www.vagrantup.com/downloads.html](http://www.vagrantup.com/downloads.html)

3. Ensure you have AWS keys correctly configured either using `hem config` or by setting the AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY environment variables.

## Provision Environment

You can now build the development environment for the first time. In the project directory, execute the following command:

    $ hem vm up

You should now be able to access the site at [http://magento1.dev](http://magento1.dev)

## Hem Usage

With the Hem enabled environment up and running please make use of the following commands for day to day usage.

```bash
hem vm start  # Starts the vm without the overhead of provisioning
hem vm stop   # Graceful halt of the vm
hem vm ssh    # Start an SSH session on the VM
hem vm mysql  # Connect to the database on the VM
```

## Common Issues

As setup issues are encountered please detail with step by step fix instructions, and where possible update the project itself to provide a more permanent fix.

 - **Ruby stacktrace mentioning 'hostsupdater' during 'hem vm up'**
   Please remove any magento1.dev entries from your hosts file and retry

# License

Copyright 2014-2016, Inviqa

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
