PHP Library Demo
================

Demo applications built around my custom PHP Library just to demonstrate the public API. Yes it might be called *Yet Another PHP Library*.

Eventually I would really like to open-source the library, but there is already a ton of similar (and mature) projects comparing to this one:

* [Symfony](http://symfony.com)
* [Slim](http://slimframework.com)
* [F3](http://fatfree.sourceforge.net)
* [Flourish](http://flourishlib.com)
* [Laravel](http://laravel.com)

### Reinventing the wheel

I am aware of the DRY principle and I admire many great projects out there. But reusing parts of most of the software is an extra overhead.

With the library I challenged my self to keep the number public methods of the classes as low as [4 basic CRUD](http://en.wikipedia.org/wiki/CRUD) as possible. Off course it is not always possible with all the scenarios, but it is a nice reminder to have. Once the class is having *too many methods* [it should be broken into more pieces](http://fabien.potencier.org/article/50/create-your-own-framework-on-top-of-the-symfony2-components-part-1). This promotes reusability across the code framework/library.

### Features

- *Dependency Injection* using **[Dependency Container](http://fabien.potencier.org/article/12/do-you-need-a-dependency-injection-container)** *(simple)*
- Storage with common, memcache-like interface:
  - noSQL-like **Flat File Database** with **Indexing**
  - noSQL-like **[MySQL Table Storage](http://backchannel.org/blog/friendfeed-schemaless-mysql)** like [Mingo](https://github.com/Jaymon/Mingo)
- Active-Record Data Modelling *(partial)*
- HTTP REST Service Wrappers for machine access *(future)*
- … (future)

For more insight [see the documentation](http://www.attitude.sk/projects/php-library).

### Goals

##### LEGO Architecture

Take the same pieces of code and build a CMS, Application backend or just a simple Blog platform.

##### Readable Syntax

Anyone should feel right at home, pick the pieces and build apps right away.


##### Lean and fast (memory efficient)

Having an all-cases-covered-software is nice, but single responsibility principle ([SRP](http://en.wikipedia.org/wiki/Single_responsibility_principle)) is the winner here when maintenance comes to a game.

##### Testable

New kid on the block in here. Things get broken from time to time, so let's just be prepared.

Why this useless repository
---------------------------

I keep the original PHP Library private right now. Here is my thing:

- I plan to build some Apps around the library, but **if my code somehow sucks**, keeping the code closed makes it a little bit more secure.
- I am still **shy to show** off my code. As much as I do appreciate [Open Source](http://sk.wikipedia.org/wiki/Open_source "Open source on Wikipedia.org"), at the end of the day I am still (just) a designer after all (not a full-blown code guy).
- Not production-ready at all – it is a kind-off experiment.

What's next
-----------

See the demos and if you like the API and if you are interested in improving the PHP Library, let me know and I can provide you with the access.

Thanks.

[Martin Adamko](http://twitter.com/martin_adamko)