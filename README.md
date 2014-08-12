# Overview
## What is LightningPHP?
LightningPHP is a FAST, mega-lightweight MVC (Model, View, Controller) framework for PHP.  Unlike most every other framework available, LightningPHP includes next to nothing by default.  This is a minimal barebones MVC framework with no fluff, no complication, and no wasted processing time.  LightningPHP can have any PHP Class plugged in as a library or model without custom rewriting or special library versions.


## Who should use LightningPHP?
If you are just looking to stand up a PHP website fast, LightningPHP is probably **not** the best framework for you.  You probably do **not** want to use LightningPHP if you are someone who:

- Wants to use a large collection of pre-built functions.
- Wants to stand up a PHP site as easily as possible.
- Does not care about servicing thousands of requests per second.

You probably **do** want to use LightningPHP if you are someone who:

- Likes to keep things simple.
- Wants an *extremely* fast application.
- Wants to be able to use whatever libraries they want without rewriting them.
- Dislikes framework specific learning.


## What makes it so fast?
- It is written in just a single class!
- Loaded models and libraries do not load other models or libraries until you explicitly ask for them.
- No features are available by default - not even MySQL support.
- Child classes only load a pointer if a model or library has been constructed previously.
- The framework does not assume you want anything loaded by default.
- The framework uses defines instead of variable substitution.


## Core Componets
LightningPHP is made up of a few core componets.  There are as few as possible to keep things simple.  
- Models ``$this->loadModel('')``
- Views ``$this->loadView('')``
- Controllers ``$this->loadController('')``
- Libraries ``$this->loadLibrary('')``
- Configs ``$this->loadConfig('')`` and ``$this->getConfig('')``

Each type of componet has its own folder at the root level.  Learn more [on the wiki](https://github.com/integrii/LightningPHP/wiki/Command-List).


## Example Application
Check out a complete example LightningPHP application [here](https://github.com/integrii/LightningPHP/wiki/Example-Application).

