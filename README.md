# Phonegap Shutdown!
Goodbye PhoneGap
Adobe recently announced that PhoneGap is shutting down. How is Cordova affected? In short: not much.

Rest assured, Apache Cordova is still active and maintained!

We want to take this opportunity to thank Adobe and the PhoneGap team for all the blood, sweat, and tears they have put forward into designing and building these tools, services, and community. Without them, hybrid mobile apps would not be the same.

Today, we are in the fortunate position that Cordova is an Open Source Software, which is entirely maintained by the community. PhoneGap originally started as an open-source project by Nitobi Software in 2008. Nitobi Software was acquired by Adobe in 2011 and shortly after donated PhoneGap to the Apache Software Foundation as Cordova. Apache Cordova, which was a core tool of Adobe PhoneGap and PhoneGap Build for the past nine years, will continue to thrive as long as the health of the community remains strong and contributions are made. If you use, have used, or looking to start using Cordova, also consider contributing and taking part in this awesome community to help it grow.

We, the community, and contributors of Apache Cordova would like to sincerely thank Adobe and all of the PhoneGap team members for everything you have put into this hybrid mobile community and sharing Cordova to the Apache Software Foundation so it can continue to grow and prosper.
# Hello World PhoneGap Application

> A Hello World application built with PhoneGap

## Usage

### Desktop

In your browser, open the file:

    /www/index.html

### PhoneGap CLI

This repository is automatically downloaded by [phonegap-cli][phonegap-cli-url]
when you create a new application.

### PhoneGap Build

Create a new app with the following repository:

    https://github.com/phonegap/phonegap-start.git

### Nitrous.io

First [setup nitrous.io][nitrous-url] to use this project.

Then run the following commands in the nitrous.io terminal:

    $ cd ~/workspace/phonegap-start
    $ npm install -g phonegap
    $ phonegap remote build android

The last command requires an Adobe ID and will build your app on PhoneGap Build.

## Contributors

### Updating the Application

The application is based on the [Apache Cordova Hello World][cordova-app] app.

#### 1. Update the Source

    cp cordova-app-hello-world/www www/

__Do not replace `www/config.xml`.__

__Do not replace `www/img/logo.png`.__

#### 2. Update index.html

Replace `<h1>Apache Cordova</h1>` with `<h1>PhoneGap</h1>`.

#### 3. Update PhoneGap Version

    <preference name="phonegap-version" value="x.x.x" />

#### 4. Commit

    $ git commit -am "Version x.x.x"

#### 5. Tag

    $ git tag x.x.x

[phonegap-cli-url]: http://github.com/phonegap/phonegap-cli
[cordova-app]: http://github.com/apache/cordova-app-hello-world
[nitrous-url]: https://d3o0mnbgv6k92a.cloudfront.net/assets/hack-l-v1-3cc067e(https://www.nitrous.io/hack_button?source=embed&runtime=nodejs&repo=phonegap%2Fphonegap-start&file_to_open=README.md

