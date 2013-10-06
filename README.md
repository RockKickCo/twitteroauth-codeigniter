TwitterOAuth-Codeigniter
========================

A super simple extension of [Abraham Williams](http://abrah.am)' [TwitterOAuth](https://github.com/abraham/twitteroauth) class so that it can be used as a Codeigniter library.

It includes a basic wrapper class `TwitterOAuth_Codeigniter` that updates the constructor to work with Codeigniters' native library loader that accepts a single array of params. Those params are then mapped to the method variables used to construct the parent class. This allows for a super simple integration of Williams' TwitterOAuth library, without have to modify any of the TwitterOAuth code.

As an added bonus, the `twitteroauth` library is included in this repo as a submodule, so you can just pull down this single repo for all your Twitter x Codeigniter needs.

