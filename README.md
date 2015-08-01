# Overview
[![Code Climate](https://codeclimate.com/repos/54555f2a695680525f0800b6/badges/00b704f87ed1ba2dc745/gpa.svg)](https://codeclimate.com/repos/54555f2a695680525f0800b6/feed)

## What is LightningPHP?
LightningPHP is a FAST, mega-lightweight MVC (Model, View, Controller) framework for PHP.  Unlike most every other framework available, LightningPHP includes next to nothing by default.  This is a minimal barebones MVC framework with no fluff, no complication, and no wasted processing time.  LightningPHP can have any PHP Class plugged in as a library or model without custom rewriting or special library versions.

In my use case, using nginx, HHVM and LightningPHP resulted in a **15x speed increase** vs the same app with CodeIgniter and Apache!


## Who should use LightningPHP?

You will love LightningPHP if you are someone who:

- Likes to keep things simple.
- Wants an *extremely* fast application.
- Wants to be able to use whatever libraries they want without rewriting them.
- Dislikes framework specific learning.

If you are just looking to stand up a PHP website without much work, LightningPHP is probably not the best framework for you.  You probably do not want to use LightningPHP if you are someone who:

- Wants to use a large collection of pre-built functions.
- Wants to stand up a PHP site as quickly as possible.
- Does not care about servicing hundreds or thousands of requests per second.



## What makes it so fast?
- It is written in just a single class!
- Loaded models and libraries do not load other models or libraries until you explicitly ask for them.
- Child classes only load a pointer if a model or library has been constructed previously.
- The framework does not assume you want anything loaded by default - not even MySQL support.
- The framework uses static defines instead of variable substitution.


## Core Componets
LightningPHP is made up of a few core componets.  There are as few as possible to keep things simple.  
- Models ``$this->loadModel('')``
- Views ``$this->loadView('')``
- Controllers ``$this->loadController('')``
- Libraries ``$this->loadLibrary('')``
- Configs ``$this->loadConfig('')`` and ``$this->getConfig('')``

Each type of componet has its own directory at the application root.  Learn more [on the wiki](https://github.com/integrii/LightningPHP/wiki/Function-List).

## Get Started

To get started using LightningPHP, download [the source for release 1](https://github.com/integrii/LightningPHP/archive/HEAD.tar.gz) and unzip it to your PHP or HHVM web server webroot. When you start it up you will see a 'Welcome to LightningPHP' page that comes with a sample controller, model, view, config and library. Use these pages as templates to start coding your app!


## Example Application
Check out a complete example LightningPHP application [here](https://github.com/integrii/LightningPHP/wiki/Example-Application).

