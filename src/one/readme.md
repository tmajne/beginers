

Use an interface when you want to force developers working in your system (yourself included) to implement a set number of methods on the classes they'll be building.

Use an abstract class when you want to force developers working in your system (yourself included) to implement a set numbers of methods and you want to provide some base methods that will help them develop their child classes.

Another thing to keep in mind is client classes can only extend one abstract class, whereas they can implement multiple interfaces. So, if you're defining your behavior contracts in abstract classes, that means each child class may only conform to a single contract. Sometimes this a good thing, when you want to force your user-programmers along a particular path. Other times it would be bad. Imagine if PHP's Countable and Iterator interfaces were abstract classes instead of interfaces.

One approach that's common when you're uncertain which way to go (as mentioned by cletus below) is to create an interface, and then have your abstract class implement that interface.



Best practice is to use an interface to specify the contract and an abstract class as just one implementation thereof. That abstract class can fill in a lot of the boilerplate so you can create an implementation by just overriding what you need to or want to without forcing you to use a particular implementation.