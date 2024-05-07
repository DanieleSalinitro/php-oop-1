# php-oop-1

create un progetto in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Aggiungere una classe parent Product ed estendere Movie da Product
Aggiungere una classe Book che estende anch'essa Product
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies e di books.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato per ogni classe
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.



<!-- LIBRI [ -->
    {
    "_id": 1,
    "title": "Unlocking Android",
    "isbn": "1933988673",
    "pageCount": 416,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg",
    "shortDescription": "Unlocking Android: A Developer's Guide provides concise, hands-on instruction for the Android operating system and development tools. This book teaches important architectural concepts in a straightforward writing style and builds on this with practical and useful examples throughout.",
    "longDescription": "Android is an open source mobile phone platform based on the Linux operating system and developed by the Open Handset Alliance, a consortium of over 30 hardware, software and telecom companies that focus on open standards for mobile devices. Led by search giant, Google, Android is designed to deliver a better and more open and cost effective mobile experience.    Unlocking Android: A Developer's Guide provides concise, hands-on instruction for the Android operating system and development tools. This book teaches important architectural concepts in a straightforward writing style and builds on this with practical and useful examples throughout. Based on his mobile development experience and his deep knowledge of the arcane Android technical documentation, the author conveys the know-how you need to develop practical applications that build upon or replace any of Androids features, however small.    Unlocking Android: A Developer's Guide prepares the reader to embrace the platform in easy-to-understand language and builds on this foundation with re-usable Java code examples. It is ideal for corporate and hobbyists alike who have an interest, or a mandate, to deliver software functionality for cell phones.    WHAT'S INSIDE:        * Android's place in the market      * Using the Eclipse environment for Android development      * The Intents - how and why they are used      * Application classes:            o Activity            o Service            o IntentReceiver       * User interface design      * Using the ContentProvider to manage data      * Persisting data with the SQLite database      * Networking examples      * Telephony applications      * Notification methods      * OpenGL, animation & multimedia      * Sample Applications  ",
    "status": "PUBLISH",
    "authors": ["W. Frank Ableson", "Charlie Collins", "Robi Sen"],
    "categories": ["Open Source", "Mobile"]
}, {
    "_id": 2,
    "title": "Android in Action, Second Edition",
    "isbn": "1935182722",
    "pageCount": 592,    
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson2.jpg",
    "shortDescription": "Android in Action, Second Edition is a comprehensive tutorial for Android developers. Taking you far beyond \"Hello Android,\" this fast-paced book puts you in the driver's seat as you learn important architectural concepts and implementation strategies. You'll master the SDK, build WebKit apps using HTML 5, and even learn to extend or replace Android's built-in features by building useful and intriguing examples. ",
    "longDescription": "When it comes to mobile apps, Android can do almost anything   and with this book, so can you! Android runs on mobile devices ranging from smart phones to tablets to countless special-purpose gadgets. It's the broadest mobile platform available.    Android in Action, Second Edition is a comprehensive tutorial for Android developers. Taking you far beyond \"Hello Android,\" this fast-paced book puts you in the driver's seat as you learn important architectural concepts and implementation strategies. You'll master the SDK, build WebKit apps using HTML 5, and even learn to extend or replace Android's built-in features by building useful and intriguing examples. ",
    "status": "PUBLISH",
    "authors": ["W. Frank Ableson", "Robi Sen"],
    "categories": ["Java"]
}, {
    "_id": 3,
    "title": "Specification by Example",
    "isbn": "1617290084",
    "pageCount": 0,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/adzic.jpg",
    "longDescription": "When it comes to mobile apps, Android can do almost anything   and with this book, so can you! Android runs on mobile devices ranging from smart phones to tablets to countless special-purpose gadgets. It's the broadest mobile platform available.    Android in Action, Second Edition is a comprehensive tutorial for Android developers. Taking you far beyond \"Hello Android,\" this fast-paced book puts you in the driver's seat as you learn important architectural concepts and implementation strategies. You'll master the SDK, build WebKit apps using HTML 5, and even learn to extend or replace Android's built-in features by building useful and intriguing examples. ",
    "status": "PUBLISH",
    "authors": ["Gojko Adzic"],
    "categories": ["Software Engineering"]
}, {
    "_id": 4,
    "title": "Flex 3 in Action",
    "isbn": "1933988746",
    "pageCount": 576,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ahmed.jpg",
    "longDescription": "New web applications require engaging user-friendly interfaces   and the cooler, the better. With Flex 3, web developers at any skill level can create high-quality, effective, and interactive Rich Internet Applications (RIAs) quickly and easily. Flex removes the complexity barrier from RIA development by offering sophisticated tools and a straightforward programming language so you can focus on what you want to do instead of how to do it. And now that the major components of Flex are free and open-source, the cost barrier is gone, as well!    Flex 3 in Action is an easy-to-follow, hands-on Flex tutorial. Chock-full of examples, this book goes beyond feature coverage and helps you put Flex to work in real day-to-day tasks. You'll quickly master the Flex API and learn to apply the techniques that make your Flex applications stand out from the crowd.    Interesting themes, styles, and skins  It's in there.  Working with databases  You got it.  Interactive forms and validation  You bet.  Charting techniques to help you visualize data  Bam!  The expert authors of Flex 3 in Action have one goal   to help you get down to business with Flex 3. Fast.    Many Flex books are overwhelming to new users   focusing on the complexities of the language and the super-specialized subjects in the Flex eco-system; Flex 3 in Action filters out the noise and dives into the core topics you need every day. Using numerous easy-to-understand examples, Flex 3 in Action gives you a strong foundation that you can build on as the complexity of your projects increases.",
    "status": "PUBLISH",
    "authors": ["Tariq Ahmed with Jon Hirschi", "Faisal Abid"],
    "categories": ["Internet"]
}, {
    "_id": 5,
    "title": "Flex 4 in Action",
    "isbn": "1935182420",
    "pageCount": 600,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ahmed2.jpg",
    "longDescription": "Using Flex, you can create high-quality, effective, and interactive Rich Internet Applications (RIAs) quickly and easily. Flex removes the complexity barrier from RIA development by offering sophisticated tools and a straightforward programming language so you can focus on what you want to do instead of how to do it. And the new features added in Flex 4 give you an even wider range of options!    Flex 4 in Action is an easy-to-follow, hands-on Flex tutorial that goes beyond feature coverage and helps you put Flex to work in real day-to-day tasks. You'll quickly master the Flex API and learn to apply the techniques that make your Flex applications stand out from the crowd.    The expert authors of Flex 4 in Action have one goal-to help you get down to business with Flex. Fast. Flex 4 in Action filters out the noise and dives into the core topics you need every day. Using numerous easy-to-understand examples, Flex 4 in Action gives you a strong foundation that you can build on as the complexity of your projects increases.    Interesting themes, styles, and skins  It's in there.  Working with databases  You got it.  Interactive forms and validation  You bet.  Charting techniques to help you visualize data  Bam!  And you'll get full coverage of these great Flex 4 upgrades:  Next generation Spark components-New buttons, form inputs, navigation controls and other visual components replace the Flex 3 \"Halo\" versions. Spark components are easier to customize, which makes skinning and theme design much faster  A new \"network monitor\" allows you to see the data communications between a Flex application and a backend server, which helps when trying to debug applications that are communicating to another system/service  Numerous productivity boosting features that speed up the process of creating applications  A faster compiler to take your human-written source code and convert it into a machine-readable format  Built-in support for unit testing allows you to improve the quality of your software, and reduce the time spent in testing",
    "status": "PUBLISH",
    "authors": ["Tariq Ahmed", "Dan Orlando", "John C. Bland II", "Joel Hooks"],
    "categories": ["Internet"]
}, {
    "_id": 6,
    "title": "Collective Intelligence in Action",
    "isbn": "1933988312",
    "pageCount": 425,    
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/alag.jpg",
    "longDescription": "There's a great deal of wisdom in a crowd, but how do you listen to a thousand people talking at once  Identifying the wants, needs, and knowledge of internet users can be like listening to a mob.    In the Web 2.0 era, leveraging the collective power of user contributions, interactions, and feedback is the key to market dominance. A new category of powerful programming techniques lets you discover the patterns, inter-relationships, and individual profiles   the collective intelligence   locked in the data people leave behind as they surf websites, post blogs, and interact with other users.    Collective Intelligence in Action is a hands-on guidebook for implementing collective-intelligence concepts using Java. It is the first Java-based book to emphasize the underlying algorithms and technical implementation of vital data gathering and mining techniques like analyzing trends, discovering relationships, and making predictions. It provides a pragmatic approach to personalization by combining content-based analysis with collaborative approaches.    This book is for Java developers implementing collective intelligence in real, high-use applications. Following a running example in which you harvest and use information from blogs, you learn to develop software that you can embed in your own applications. The code examples are immediately reusable and give the Java developer a working collective intelligence toolkit.    Along the way, you work with, a number of APIs and open-source toolkits including text analysis and search using Lucene, web-crawling using Nutch, and applying machine learning algorithms using WEKA and the Java Data Mining (JDM) standard.",
    "status": "PUBLISH",
    "authors": ["Satnam Alag"],
    "categories": ["Internet"]
}, {
    "_id": 7,
    "title": "Zend Framework in Action",
    "isbn": "1933988320",
    "pageCount": 432,    
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/allen.jpg",
    "shortDescription": "Zend Framework in Action is a comprehensive tutorial that shows how to use the Zend Framework to create web-based applications and web services. This book takes you on an over-the-shoulder tour of the components of the Zend Framework as you build a high quality, real-world web application.",
    "longDescription": "From rather humble beginnings as the Personal Home Page scripting language, PHP has found its way into almost every server, corporation, and dev shop in the world. On an average day, somewhere between 500,000 and 2 million coders do something in PHP. Even when you use a well-understood language like PHP, building a modern web application requires tools that decrease development time and cost while improving code quality. Frameworks such as Ruby-on-Rails and Django have been getting a lot of attention as a result.     For PHP coders, the Zend Framework offers that same promise without the need to move away from PHP. This powerful collection of components can be used in part or as a whole to speed up the development process. Zend Framework has the backing of Zend Technologies; the driving force behind the PHP programming language in which it is written. The first production release of the Zend Framework became available in July of 2007.    Zend Framework in Action is a comprehensive tutorial that shows how to use the Zend Framework to create web-based applications and web services. This book takes you on an over-the-shoulder tour of the components of the Zend Framework as you build a high quality, real-world web application. This book is organized around the techniques you'll use every day as a web developer \"data handling, forms, authentication, and so forth. As you follow the running example, you'll learn to build interactive Ajax-driven features into your application without sacrificing nuts-and-bolts considerations like security and performance.  This book is aimed at the competent PHP developer who wants to master framework-driven web development. Zend Framework in Action goes beyond the docs but still provides quick access to the most common topics encountered in the development of web applications.  ",
    "status": "PUBLISH",
    "authors": ["Rob Allen", "Nick Lo", "Steven Brown"],
    "categories": ["Web Development"]
}, {
    "_id": 8,
    "title": "Flex on Java",
    "isbn": "1933988797",
    "pageCount": 265,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/allmon.jpg",
    "shortDescription": "   A beautifully written book that is a must have for every Java Developer.       Ashish Kulkarni, Technical Director, E-Business Software Solutions Ltd.",
    "longDescription": "In the demo, a hip designer, a sharply-dressed marketer, and a smiling, relaxed developer sip lattes and calmly discuss how Flex is going to make customers happy and shorten the workday   all while boosting the bottom line. The software systems they're using have been carefully selected and built from the ground up to work together seamlessly. There are no legacy systems, data, or competing business concerns to manage.    Cut to reality.    You're a Java developer. The marketing guy tells you that \"corporate\" wants a Flex-based site and you have to deliver it on top of what you already have. Your budget  Don't even ask. \"Make it look like the Discovery channel or something.\"    Flex on Java assumes you live in the real world   not the demo. This unique book shows you how to refactor an existing web application using the server-side you already know. You'll learn to use Flex 3 in concert with Spring, EJB 3, POJOs, JMS, and other standard technologies. Wherever possible, the examples use free or open source software.    The authors start with a typical Java web app and show you how to add a rich Flex interface. You also learn how to integrate Flex into your server-side Java via the BlazeDS framework, Adobe's open-source remoting and web messaging technology for Flex.    The book shows you how to deploy to not only the web but also to the desktop using the Adobe Integrated Runtime (AIR). You will learn how to integrate Flex into your existing applications in order to build a next generation application that will delight users.    Flex on Java is approachable for anyone beginning Java and Flex development.    ",
    "status": "PUBLISH",
    "authors": ["Bernerd Allmon", "Jeremy Anderson"],
    "categories": ["Internet"]
}, {
    "_id": 9,
    "title": "Griffon in Action",
    "isbn": "1935182234",
    "pageCount": 375,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/almiray.jpg",
    "shortDescription": "Griffon in Action is a comprehensive tutorial written for Java developers who want a more productive approach to UI development. In this book, you'll immediately dive into Griffon. After a Griffon orientation and a quick Groovy tutorial, you'll start building examples that explore Griffon's high productivity approach to Swing development. One of the troublesome parts of Swing development is the amount of Java code that is required to get a simple application off the ground.",
    "longDescription": "Although several options exist for interface development in Java, even popular UI toolkits like Swing have been notoriously complex and difficult to use. Griffon, an agile framework that uses Groovy to simplify Swing, makes UI development dramatically faster and easier. In many respects, Griffon is for desktop development what Grails is for web development. While it's based on Swing, its declarative style and approachable level of abstraction is instantly familiar to developers familiar with other technologies such as Flex or JavaFX.    Griffon in Action is a comprehensive tutorial written for Java developers who want a more productive approach to UI development. In this book, you'll immediately dive into Griffon. After a Griffon orientation and a quick Groovy tutorial, you'll start building examples that explore Griffon's high productivity approach to Swing development. One of the troublesome parts of Swing development is the amount of Java code that is required to get a simple application off the ground.    You'll learn how SwingBuilder (and its cousin builders) present a very palatable alternative in the form of a DSL geared towards building graphical user interfaces. Pair it up with the convention over configuration paradigm, a well tested and tried application source structure (based on Grails) and you have a recipe for quick and effective Swing application development. Griffon in Action covers declarative view development, like the one provided by JavaFX Script, as well as the structure, architecture and life cycle of Java application development",
    "status": "PUBLISH",
    "authors": ["Andres Almiray", "Danno Ferrin", "", "James Shingler"],
    "categories": ["Java"]
}, {
    "_id": 10,
    "title": "OSGi in Depth",
    "isbn": "193518217X",
    "pageCount": 325,    
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/alves.jpg",
    "shortDescription": "Enterprise OSGi shows a Java developer how to develop to the OSGi Service Platform Enterprise specification, an emerging Java-based technology for developing modular enterprise applications. Enterprise OSGi addresses several shortcomings of existing enterprise platforms, such as allowing the creation of better maintainable and extensible applications, and provide a simpler, easier-to-use, light-weight solution to enterprise software development.",
    "longDescription": "A good application framework greatly simplifies a developer's task by providing reusable code modules that solve common, tedious, or complex tasks. Writing a great framework requires an extraordinary set of skills-ranging from deep knowledge of a programming language and target platform to a crystal-clear view of the problem space where the applications to be developed using the framework will be used.    OSGi Application Frameworks shows a Java developer how to build frameworks based on the OSGi service platform. OSGi, an emerging Java-based technology for developing modular applications, is a great tool for framework building. A framework itself, OSGi allows the developer to create a more intuitive, modular framework by isolating many of the key challenges the framework developer faces.    This book begins by describing the process, principles, and tools you must master to build a custom application framework. It introduces the fundamental concepts of OSGi, and then shows you how to put OSGi to work building various types of frameworks that solve specific development problems.    OSGi is particularly useful for building frameworks that can be easily extended by developers to create domain-specific applications. This book teaches the developer to break down a problem domain into its abstractions and then use OSGi to create a modular framework solution. Along the way, the developer learns software engineering practices intrinsic to framework building that result in systems with better software qualities, such as flexibility, extensibility, and maintainability.    Author Alexandre Alves guides you through major concepts, such as the definition of programming models and modularization techniques, and complements them with samples that have real applicability using industry-proved technologies, such as Spring-DM and Equinox.",
    "status": "PUBLISH",
    "authors": ["Alexandre de Castro Alves"],
    "categories": ["Java"]
}, {
    "_id": 11,
    "title": "Flexible Rails",
    "isbn": "1933988509",
    "pageCount": 592,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/armstrong.jpg",
    "shortDescription": "\"Flexible Rails created a standard to which I hold other technical books. You definitely get your money's worth.\"",
    "longDescription": "Rails is a fantastic tool for web application development, but its Ajax-driven interfaces stop short of the richness you gain with a tool like Adobe Flex. Simply put, Flex is the most productive way to build the UI of rich Internet applications, and Rails is the most productive way to rapidly build a database-backed CRUD application. Together, they're an amazing combination.    Flexible Rails is a book about how to use Ruby on Rails and Adobe Flex to build next-generation rich Internet applications (RIAs). The book takes you to the leading edge of RIA development, presenting examples in Flex 3 and Rails 2.    This book is not an exhaustive Ruby on Rails tutorial, nor a Flex reference manual. (Adobe ships over 3000 pages of PDF reference documentation with Flex.) Instead, it's an extensive tutorial, developed iteratively, how to build an RIA using Flex and Rails together. You learn both the specific techniques you need to use Flex and Rails together as well as the development practices that make the combination especially powerful.    The example application built in the book is MIT-licensed, so readers can use it as the basis for their own applications. In fact, one reader has already built an agile project management tool based on the book example!    With this book, you learn Flex by osmosis. You can read the book and follow along even if you have never used Flex before. Consider it \"Flex Immersion.\" You absorb the key concepts of Flex as you go through the process of building the application.    You will also learn how Flex and Rails integrate with HTTPService and XML, and see how RESTful Rails controller design gracefully supports using the same controller actions for Flex and HTML clients. The author will show you how Cairngorm can be used to architect larger Flex applications, including tips to use Cairngorm in a less verbose way with HTTPService to talk to Rails.    Flexible Rails is for both Rails developers who are interested in Flex, and Flex developers who are interested in Rails. For a Rails developer, Flex allows for more dynamic and engaging user interfaces than are possible with Ajax. For a Flex developer, Rails provides a way to rapidly build the ORM and services layer of the application.",
    "status": "PUBLISH",
    "authors": ["Peter Armstrong"],
    "categories": ["Web Development"]
}, {
    "_id": 13,
    "title": "Hello! Flex 4",
    "isbn": "1933988762",
    "pageCount": 258,    
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/armstrong3.jpg",
    "shortDescription": "Hello! Flex 4 progresses through 26 self-contained examples selected so you can progressively master Flex. They vary from small one-page apps, to a 3D rotating haiku, to a Connect Four-like game. And in the last chapter you'll learn to build a full Flex application called SocialStalkr   a mashup that lets you follow your friends by showing their tweets on a Yahoo map.",
    "longDescription": "With Flex 4 you can easily add color and life to your web applications by introducing dynamic user features, slick transitions, and eye-catching animations. Flex also provides powerful data handling capabilities so you can build industrial-strength applications. And it's open source, so you can get started without forking over a lot of your hard-earned cash.    We think it should be just as much fun to learn Flex as it is to use Flex. Hello! Flex 4 shows you everything you need to know to get started with Flex 4 without bogging you down in obscure detail or academic edge cases. In this entertaining, hands-on book, you'll quickly move from Hello World into the techniques you'll need to use Flex effectively.    You'll start by progressing through 26 self-contained workshop items, which include everything from small one-page examples, to a 3D rotating haiku, to building a Connect Four game. Finally, in the last chapter you'll build a full Flex application called 'SocialStalkr': an interesting mashup of Twitter and Yahoo Maps that lets you 'stalk' your friends by showing specially formatted Twitter tweets on a Yahoo map.",
    "status": "PUBLISH",
    "authors": ["Peter Armstrong"],
    "categories": ["Internet"]
}, {
    "_id": 14,
    "title": "Coffeehouse",
    "isbn": "1884777384",
    "pageCount": 316,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/asher.jpg",
    "shortDescription": "Coffeehouse is an anthology of stories, poems and essays originally published on the World Wide Web.",
    "longDescription": "Coffeehouse is an anthology of stories, poems and essays originally published on the World Wide Web. The purpose is to capture the zeitgeist of the web's creative community, and to give readers a chance to enjoy some of the best and most notable original works that have appeared in this form. It showcases over forty individual web writers, among them Joseph Squier, Martha Conway, Jason Snell, David Alexander, Carl Steadman and Walter Miller. The intent is to show the variety and vitality of the web's blossoming literary \"scene,\" and to capture the unique and highly iconoclastic \"personality\" of the web community.",
    "status": "PUBLISH",
    "authors": ["Levi Asher", "Christian Crumlish"],
    "categories": ["Miscellaneous"]
}, {
    "_id": 15,
    "title": "Team Foundation Server 2008 in Action",
    "isbn": "1933988592",
    "pageCount": 344,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/azher.jpg",
    "longDescription": "In complex software projects, managing the development process can be as critical to success as writing the code itself. A project may involve dozens of developers, managers, architects, testers, and customers, hundreds of builds, and thousands of opportunities to get off-track. To keep tabs on the people, tasks, and components of a medium- to large-scale project, most teams use a development system that allows for easy monitoring, follow-up, and accountability.    Microsoft Team Foundation Server 2008 (TFS), the server component of Microsoft's Visual Studio Team System (VSTS), provides a powerful collaborative platform for software-development teams. The product offers an integrated toolset for tracking work items, creating test cases, managing source code, generating builds, constructing database schemas, and so on. Because in software development one size does not fit all, TFS provides process customization, project management, and reporting capabilities to build solutions around your requirements.    Team Foundation Server 2008 in Action is a hands-on guide to Team Foundation Server 2008. Written for developers with a good handle on TFS basics, this book shows you how to solve real-life problems. It's not a repetition of Microsoft's product documentation. Team Foundation Server 2008 in Action is a practitioner's handbook for how to work with TFS under common constraints. This book walks you through real-life software engineering problems based on hundreds of hours of TFS experience.    You'll benefit from expert author Jamil Azher's extensive interactions with members of Microsoft's TFS team and MVPs, survey feedback from the author's blog, and interviews with organizations and user groups using TFS. Instead of just offering a high-level overview, the book provides detailed solutions for solving common   and not-so-common   problems using TFS. It discusses the strengths as well as weaknesses of TFS, and suggests appropriate problem resolution steps, workarounds, or custom solutions.",
    "status": "PUBLISH",
    "authors": ["Jamil Azher"],
    "categories": ["Microsoft .NET"]
}, {
    "_id": 16,
    "title": "Brownfield Application Development in .NET",
    "isbn": "1933988711",
    "pageCount": 550,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/baley.jpg",
    "shortDescription": "Brownfield Application Development in .Net shows you how to approach legacy applications with the state-of-the-art concepts, patterns, and tools you've learned to apply to new projects. Using an existing application as an example, this book guides you in applying the techniques and best practices you need to make it more maintainable and receptive to change.",
    "longDescription": "It's easy to get excited about building a new software project from scratch. So-called \"greenfield\" projects often involve learning new technology and the opportunity for experimentation. Working on established software projects may seem less glamorous.    Most software developers have inherited a monolithic application where the day-to-day tasks involve maintenance, incremental improvements, or even cleaning up the mess another programmer left behind. These legacy or brownfield projects often have tightly coupled components, low cohesion, and poor separation of concerns, making them fragile and resistant to change.    Brownfield Application Development in .Net shows you how to approach legacy applications with the state-of-the-art concepts, patterns, and tools you've learned to apply to new projects. Using an existing application as an example, this book guides you in applying the techniques and best practices you need to make it more maintainable and receptive to change.    Starting with the build process and the introduction of unit tests, the authors show you how to set up the application so that in later chapters, you can make incremental changes aimed at decoupling components from each other. Each practice introduced will increase your confidence and ability to make subsequent changes to your code.    As the book proceeds, the authors introduce frameworks and tools commonly used today while still approaching the subject from a conceptual level so that you can substitute alternate tools as appropriate. This book examines the reasons why a tool is necessary, not the tool itself. Because the book is based on the authors' experiences, Brownfield Application Development in .Net moves beyond the theories and shows you the techniques you need to be successful.",
    "status": "PUBLISH",
    "authors": ["Kyle Baley", "Donald Belcham"],
    "categories": ["Microsoft"]
}, {
    "_id": 17,
    "title": "MongoDB in Action",
    "isbn": "1935182870",
    "pageCount": 0,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/banker.jpg",
    "shortDescription": "MongoDB In Action is a comprehensive guide to MongoDB for application developers. The book begins by explaining what makes MongoDB unique and describing its ideal use cases. A series of tutorials designed for MongoDB mastery then leads into detailed examples for leveraging MongoDB in e-commerce, social networking, analytics, and other common applications.",
    "longDescription": "MongoDB is a document-oriented database that's highly scalable and delivers very high-performance, especially with massive data sets that need to be spread across multiple servers. It blends the things you expect with any database   like indexing, querying, and high availability   with powerful new features like easy horizontal scaling (\"auto-sharding\"), map/reduce aggregation, and a flexible document data model to support dynamic schemas.    MongoDB In Action is a comprehensive guide to MongoDB for application developers. The book begins by explaining what makes MongoDB unique and describing its ideal use cases. A series of tutorials designed for MongoDB mastery then leads into detailed examples for leveraging MongoDB in e-commerce, social networking, analytics, and other common applications.    Along the way, all of MongoDB's major features are covered, including:        * Indexes and explain plans for efficient queries      * Atomic operations for managing simple data structures and manipulating complex, rich documents      * GridFS for storing and managing large binary objects (images, videos, etc.) in MongoDB      * Map-reduce for custom aggregations and reporting      * Master-slave replication and replica sets for automated failover      * Auto-sharding for automated horizontal scaling    The handy reference section on schema design patterns will help ease the transition from the relational data model of SQL to MongoDB's document-based data model. The numerous, detailed examples are implemented in Ruby and include comprehensive explanations.    MongoDB has been gaining traction in the developer community for its speed, flexibility, scalability, and ease of use. With production deployments that include SourceForge, Foursquare, and Shutterfly, MongoDB is proving to be a robust and reliable database system that keeps developers happy. Covering everything from installation to application design to deployment, MongoDB In Action is written for the application developer who wants to take advantage of MongoDB and get up and running quickly.",
    "status": "PUBLISH",
    "authors": ["Kyle Banker"],
    "categories": ["Next Generation Databases"]
}, {
    "_id": 18,
    "title": "Distributed Application Development with PowerBuilder 6.0",
    "isbn": "1884777686",
    "pageCount": 504,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg",
    "longDescription": "Distributed Application Development with PowerBuilder 6.0 is a vital source for the PowerBuilder programmer; it provides the sort of detailed coverage of Distributed PowerBuilder that you can find nowwhere else.    The book opens with a discussion of distributed computing in general, as well as its design principles and technologies. Then Distributed PowerBuilder is examined in detail. By building a simple application step by step, the author discusses all of the concepts and components needed for building a PowerBuilder application and shows how to make the application available over a network.    Finally, the author explores how PowerBuilder can be used in distributed solutions both with and without using DPB.    Distributed Application Development with PowerBuilder 6.0 is for any PowerBuilder developer looking for information on distributed computing options with the PowerBuilder environment. IS managers, system architects, and developers using many different technologies can learn how PowerBuilder can be used as all or part of the solution for building distributed applications.    The main topic of this book is Distributed PowerBuilder (DPB). It covers the basics of building a DPB application and walks through each new feature with examples including the Shared object, DataWindow synchronization, Server Push and Web.PB. It also explains distributed computing technologies and design principles so that your application can be built to handle the stresses of a distributed environment.  ",
    "status": "PUBLISH",
    "authors": ["Michael J. Barlotta"],
    "categories": ["PowerBuilder"]
}, {
    "_id": 19,
    "title": "Jaguar Development with PowerBuilder 7",
    "isbn": "1884777864",
    "pageCount": 550,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/barlotta2.jpg",
    "shortDescription": "Jaguar Development with PowerBuilder 7 is the definitive guide to distributed application development with PowerBuilder. It is the only book dedicated to preparing PowerBuilder developers for Jaguar applications and has been approved by Sybase engineers and product specialists who build the tools described in the book.",
    "longDescription": "Jaguar Development with PowerBuilder 7 is the definitive guide to distributed application development with PowerBuilder. It is the only book dedicated to preparing PowerBuilder developers for Jaguar applications and has been approved by Sybase engineers and product specialists who build the tools described in the book.    Jaguar Development with PowerBuilder 7 focuses on getting you up to speed on Jaguar and PowerBuilder, and it is packed with code samples to guide you every step of the way. It covers each step involved in application development, from setting up the development environment to deploying a production application.    Even a PowerBuilder developer with no experience in distributed technologies or Jaguar CTS will learn what it takes to build an application. Jaguar Development with PowerBuilder 7 covers:    Developing Component-centric Applications  Building Jaguar CTS Components/Clients  CORBA  Adaptive SQL Anywhere  Adaptive Server Enterprise  and lots more!",
    "status": "PUBLISH",
    "authors": ["Michael Barlotta"],
    "categories": ["PowerBuilder", "Client-Server"]
}, {
    "_id": 20,
    "title": "Taming Jaguar",
    "isbn": "1884777686",
    "pageCount": 362,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/barlotta3.jpg",
    "longDescription": "Taming Jaguar is part of the PowerBuilder Developer's series, which includes Distributed Application Development with PowerBuilder 6 and Jaguar Development with PowerBuilder 7.    An application server is the heart of your enterprise computing architecture, centralizing your web content, business logic, and access to your data and legacy applications. Sybase's application server, Jaguar CTS, delivers performance, scalability, and flexibility running CORBA , COM, Java/EJB, C++, and PowerBuilder components.    If you are looking to adopt Jaguar in your enterprise, look no further. Taming Jaguar shows you how to solve the real-world problems of installing, trouble-shooting, designing, developing, and maintaining a Jaguar application. Topical chapters are organized in a Q & A format making it easy for you to quickly find the solution to your problem. They also provide foundational and background information as well as detailed technical how-tos.    Although designed so you can find your problems easily, this book is meant to be read cover-to-cover with each chapter discussing its topic exhaustively.    What's inside:    J2EE development  Java Servlets  Jaguar administration & code balancing  EJBs  Web development with PowerDynamo  Advanced component design ",
    "status": "PUBLISH",
    "authors": ["Michael J. Barlotta", "Jason R. Weiss"],
    "categories": ["PowerBuilder"]
}, {
    "_id": 21,
    "title": "3D User Interfaces with Java 3D",
    "isbn": "1884777902",
    "pageCount": 520,
    "thumbnailUrl": "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/barrilleaux.jpg",
    "longDescription": "3D User Interfaces with Java 3D is a practical guide for providing next-generation applications with 3D user interfaces for manipulation of in-scene objects. Emphasis is on standalone and web-based business applications, such as for online sales and mass customization, but much of what this book offers has broad applicability to 3D user interfaces in other pursuits such as scientific visualization and gaming.  This book provides an extensive conceptual framework for 3D user interface techniques, and an in-depth introduction to user interface support in the Java 3D API, including such topics as picking, collision, and drag-and-drop. Many of the techniques are demonstrated in a Java 3D software framework included with the book, which also provides developers with many general-purpose building blocks for constructing their own user interfaces.    Applications and their use of 3D are approached realistically. The book is geared towards sophisticated user interfaces for the \"everyday user\" who doesn't have a lot of time to learn another application--much less a complicated one--and an everyday computer system without exotic devices like head mounted displays and data gloves. Perhaps the best description of this book is: \"A roadmap from Java 3D to 'Swing 3D'.\"",
    "status": "PUBLISH",
    "authors": ["Jon Barrilleaux"],
    "categories": ["Java", "Computer Graphics"]
}
]

<!-- FILM -->
 [
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/wVTvfxz53pDqrIvbrxhVdKcLhip.jpg",
            "genre_ids": [
                28,
                12,
                878,
                53
            ],
            "id": 9381,
            "original_language": "en",
            "original_title": "Babylon A.D.",
            "overview": "A veteran-turned-mercenary is hired to take a young woman with a secret from post-apocalyptic Eastern Europe to New York City.",
            "popularity": 199.314,
            "poster_path": "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg",
            "release_date": "2008-08-20",
            "title": "Babylon A.D.",
            "video": false,
            "vote_average": 5.601,
            "vote_count": 1906
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/5Di2tovzn8lnXWxigV6xm7yrL24.jpg",
            "genre_ids": [
                16,
                12,
                28,
                14,
                10751
            ],
            "id": 1147400,
            "original_language": "fr",
            "original_title": "Miraculous World : Paris, Les Aventures de Toxinelle et Griffe Noire",
            "overview": "Miraculous holders from another world appear in Paris. They come from a parallel universe where everything is reversed: the holders of Ladybug and Black Cat Miraculouses, Shadybug and Claw Noir, are the bad guys, and the holder of the Butterfly Miraculous, Hesperia, is a superhero. Ladybug and Cat Noir will have to help Hesperia counter the attacks of their evil doubles and prevent them from seizing the Butterfly's Miraculous. Can our heroes also help Hesperia make Shadybug and Claw Noir better people?",
            "popularity": 78.837,
            "poster_path": "https://image.tmdb.org/t/p/w342/A46SghdyD9y7qQUxB5zOslospJ7.jpg",
            "release_date": "2023-10-21",
            "title": "Miraculous World: Paris, Tales of Shadybug and Claw Noir",
            "video": false,
            "vote_average": 6.935,
            "vote_count": 62
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/t5zCBSB5xMDKcDqe91qahCOUYVV.jpg",
            "genre_ids": [
                27,
                9648
            ],
            "id": 507089,
            "original_language": "en",
            "original_title": "Five Nights at Freddy's",
            "overview": "Recently fired and desperate for work, a troubled young man named Mike agrees to take a position as a night security guard at an abandoned theme restaurant: Freddy Fazbear's Pizzeria. But he soon discovers that nothing at Freddy's is what it seems.",
            "popularity": 759.232,
            "poster_path": "https://image.tmdb.org/t/p/w342/j9mH1pr3IahtraTWxVEMANmPSGR.jpg",
            "release_date": "2023-10-25",
            "title": "Five Nights at Freddy's",
            "video": false,
            "vote_average": 7.8,
            "vote_count": 2619
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/6tCTR5Gr91Kocrt0goLrpFs1tqh.jpg",
            "genre_ids": [
                18
            ],
            "id": 833326,
            "original_language": "fr",
            "original_title": "Rien à foutre",
            "overview": "Cassandre, 26, is a flight attendant for a low-cost airline. Based in Lanzarote, she’s always willing to take on extra hours and carries out her duties with robotic efficiency. On the side, she just goes with the flow and floats between Tinder, parties and lazy days. When she suddenly gets dismissed, she is forced to return home.",
            "popularity": 257.363,
            "poster_path": "https://image.tmdb.org/t/p/w342/wLZ5jijVpOxHuBLmsICKLXwlldu.jpg",
            "release_date": "2022-03-02",
            "title": "Zero Fucks Given",
            "video": false,
            "vote_average": 6.417,
            "vote_count": 306
        },
        {
            "adult": false,
            "backdrop_path": null,
            "genre_ids": [
                18,
                10402
            ],
            "id": 461191,
            "original_language": "en",
            "original_title": "A",
            "overview": "A young alcoholic ambient musician locks himself in his apartment on a dangerous seven day bender as he attempts to finish his upcoming album.",
            "popularity": 3.7,
            "poster_path": "https://image.tmdb.org/t/p/w342/4uOKZzRB615cIxcVi31pcsdFtSS.jpg",
            "release_date": "2017-09-13",
            "title": "A",
            "video": false,
            "vote_average": 7.19,
            "vote_count": 58
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/ltpW5exyTdqL5twV8zRMajf1VgU.jpg",
            "genre_ids": [
                99
            ],
            "id": 24791,
            "original_language": "ja",
            "original_title": "A",
            "overview": "Roughly chronological, from 3/96 to 11/96, with a coda in spring of 1997: inside compounds of Aum Shinrikyo, a Buddhist sect led by Shoko Asahara. (Members confessed to a murderous sarin attack in the Tokyo subway in 1995.) We see what they eat, where they sleep, and how they respond to media scrutiny, on-going trials, the shrinking of their fortunes, and the criticism of society. Central focus is placed on Hiroshi Araki, a young man who finds himself elevated to chief spokesman for Aum after its leaders are arrested. Araki faces extreme hostility from the Japanese public, who find it hard to believe that most followers of the cult had no idea of the attacks and even harder to understand why these followers remain devoted to the religion, if not the violence.",
            "popularity": 4.073,
            "poster_path": "https://image.tmdb.org/t/p/w342/dBLzrfh5DtxJey1hOYZaN2drPe3.jpg",
            "release_date": "1998-09-09",
            "title": "A",
            "video": false,
            "vote_average": 6.189,
            "vote_count": 53
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/A1g8AvP3KpDyu0iyjS6roRxK77v.jpg",
            "genre_ids": [
                53,
                80
            ],
            "id": 978870,
            "original_language": "it",
            "original_title": "L'ultima notte di Amore",
            "overview": "On the night before his retirement, police lieutenant Franco Amore is called to investigate the death of a long-time partner of his in a diamond heist in which he was involved.",
            "popularity": 147.052,
            "poster_path": "https://image.tmdb.org/t/p/w342/dBp0REsZkZ1HK1PycwlLdBtYdsd.jpg",
            "release_date": "2023-03-09",
            "title": "Last Night of Amore",
            "video": false,
            "vote_average": 7.22,
            "vote_count": 296
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/kszooR7v1TLFM4pzx6IkKq2jDAN.jpg",
            "genre_ids": [
                18,
                80,
                9648
            ],
            "id": 915935,
            "original_language": "fr",
            "original_title": "Anatomie d'une chute",
            "overview": "A woman is suspected of her husband’s murder, and their blind son faces a moral dilemma as the sole witness.",
            "popularity": 127.384,
            "poster_path": "https://image.tmdb.org/t/p/w342/kQs6keheMwCxJxrzV83VUwFtHkB.jpg",
            "release_date": "2023-08-23",
            "title": "Anatomy of a Fall",
            "video": false,
            "vote_average": 7.83,
            "vote_count": 358
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/5quyXeEA6RaoTjaiypECXOKXT2o.jpg",
            "genre_ids": [
                35,
                9648
            ],
            "id": 1179664,
            "original_language": "es",
            "original_title": "Invitación a un Asesinato",
            "overview": "Eccentric millionaire Olivia sends her half sister Agatha, and a group of old acquaintances, a mysterious invitation for a weekend on her yacht, where they will discover the true motive behind this invitation: the celebration of… a murder?",
            "popularity": 21.665,
            "poster_path": "https://image.tmdb.org/t/p/w342/1IFdWd7ykl0yHqKid9Mm7TTIDSK.jpg",
            "release_date": "2023-10-06",
            "title": "A Deadly Invitation",
            "video": false,
            "vote_average": 5.898,
            "vote_count": 113
        },
        {
            "adult": false,
            "backdrop_path": null,
            "genre_ids": [
                28,
                16
            ],
            "id": 116776,
            "original_language": "ja",
            "original_title": "ドラゴンボール 魔訶不思議大冒険",
            "overview": "Master Roshi has succeeded at the one mission he valued most: to train Goku and Krillin to become ultimate fighters. So, he arranges for them to test their mettle at a competition hosted by Emperor Chiaotzu. Not everyone's playing by the rules, however, as a member of the ruler's household schemes to use the Dragonballs to extort money and power from the royal.",
            "popularity": 296.151,
            "poster_path": "https://image.tmdb.org/t/p/w342/5aXG0B3TYTpQsodXzvYCkKQfpB1.jpg",
            "release_date": "1988-07-09",
            "title": "Dragon Ball: Mystical Adventure",
            "video": false,
            "vote_average": 6.756,
            "vote_count": 227
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/4HodYYKEIsGOdinkGi2Ucz6X9i0.jpg",
            "genre_ids": [
                16,
                28,
                12,
                878
            ],
            "id": 569094,
            "original_language": "en",
            "original_title": "Spider-Man: Across the Spider-Verse",
            "overview": "After reuniting with Gwen Stacy, Brooklyn’s full-time, friendly neighborhood Spider-Man is catapulted across the Multiverse, where he encounters the Spider Society, a team of Spider-People charged with protecting the Multiverse’s very existence. But when the heroes clash on how to handle a new threat, Miles finds himself pitted against the other Spiders and must set out on his own to save those he loves most.",
            "popularity": 323.175,
            "poster_path": "https://image.tmdb.org/t/p/w342/8Vt6mWEReuy4Of61Lnj5Xj704m8.jpg",
            "release_date": "2023-05-31",
            "title": "Spider-Man: Across the Spider-Verse",
            "video": false,
            "vote_average": 8.4,
            "vote_count": 5035
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/3H8u03qr9se2pCv3QTHR1gxSa9k.jpg",
            "genre_ids": [
                99,
                28,
                12
            ],
            "id": 1174725,
            "original_language": "de",
            "original_title": "Duell am Abgrund",
            "overview": "Fearless alpine climbers Ueli Steck and Dani Arnold enter into a death-defying rivalry to set speed records on the Swiss Alps' great north faces.",
            "popularity": 30.286,
            "poster_path": "https://image.tmdb.org/t/p/w342/tI9ybrWLiVLljLsNoqEjQF36oG4.jpg",
            "release_date": "2023-10-04",
            "title": "Race to the Summit",
            "video": false,
            "vote_average": 6.471,
            "vote_count": 35
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/a2K8ak4pGCHR3O0hMualcokXXpa.jpg",
            "genre_ids": [
                10749,
                53
            ],
            "id": 210763,
            "original_language": "kn",
            "original_title": "A",
            "overview": "A film director fades away from the industry after the failed love with the heroine of his movie. After being rehabilitated, he learns that some people conspired his fall and decides to take revenge.",
            "popularity": 2.533,
            "poster_path": "https://image.tmdb.org/t/p/w342/y3DH68oWOGMZ637tqYHfTGU4Bif.jpg",
            "release_date": "1998-02-12",
            "title": "A",
            "video": false,
            "vote_average": 6.256,
            "vote_count": 39
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/tvLSz04uSgNyRVdLb8hJDU5uFMB.jpg",
            "genre_ids": [
                35,
                80,
                18
            ],
            "id": 1145810,
            "original_language": "es",
            "original_title": "No voy a pedirle a nadie que me crea",
            "overview": "A writer's career — and entire life — suddenly goes off script when he falls prey to a dangerous web of criminals right before moving to Barcelona.",
            "popularity": 81.177,
            "poster_path": "https://image.tmdb.org/t/p/w342/5JyivjFm8WzZU2jhzjMWdbWdOwj.jpg",
            "release_date": "2023-10-22",
            "title": "I Don't Expect Anyone to Believe Me",
            "video": false,
            "vote_average": 6.0,
            "vote_count": 4
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/x7x6NT1JcdqxK8GlAWFhm3mzHnV.jpg",
            "genre_ids": [
                37,
                28
            ],
            "id": 835767,
            "original_language": "en",
            "original_title": "Gunfight at Rio Bravo",
            "overview": "When mysterious Russian gunslinger Ivan Turchin rides into a small Texas town, he runs afoul of a bloodthirsty outlaw gang known as The Hellhounds. Outmanned and outgunned, the town must put their trust in Turchin to protect them from annihilation at the hands of the bandits. The gunslinger finds allies in the form of Marshal Austin Carter and Sheriff Vernon Kelly, and together the three must make a desperate stand against impossible and violent odds.",
            "popularity": 139.868,
            "poster_path": "https://image.tmdb.org/t/p/w342/92hYmHw1XpMEF7yZUzjOzcO4zmC.jpg",
            "release_date": "2023-01-13",
            "title": "Gunfight at Rio Bravo",
            "video": false,
            "vote_average": 4.3,
            "vote_count": 15
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/uRizG2pUwHNjmTLrUvqdi3pWK1n.jpg",
            "genre_ids": [
                18,
                36,
                10752
            ],
            "id": 680133,
            "original_language": "bn",
            "original_title": "মুজিব: একটি জাতির রূপকার",
            "overview": "Biopic on the father of the nation of Bangladesh, Sheikh Mujibur Rahman. The film will showcase his growing up as a child to his standing up against all injustice in his youth to fighting for the independence of his country. How he led a country to it's independence with his inspirational presence and fight for the justice.",
            "popularity": 44.13,
            "poster_path": "https://image.tmdb.org/t/p/w342/bnIJ5lK66cfnvJ0A1D6FLp4NZzJ.jpg",
            "release_date": "2023-10-27",
            "title": "Mujib: The Making of a Nation",
            "video": false,
            "vote_average": 6.1,
            "vote_count": 5
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/dLfPOTB9zlGCNZJinYvf9yygaX6.jpg",
            "genre_ids": [
                10749,
                35
            ],
            "id": 264859,
            "original_language": "de",
            "original_title": "Sechs Schwedinnen auf der Alm",
            "overview": "This comedy has everyone's favorite 6 Swedish gals enjoying their stay in the alps. When the girls aren't enjoying the pleasure of their own company they're out having a good time with nearly everyone else in town.",
            "popularity": 74.599,
            "poster_path": "https://image.tmdb.org/t/p/w342/5kk9GUeeGTdyhcerUfxzhJYt6Gm.jpg",
            "release_date": "1983-07-22",
            "title": "Six Swedish Girls in Alps",
            "video": false,
            "vote_average": 5.897,
            "vote_count": 39
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/8rpDcsfLJypbO6vREc0547VKqEv.jpg",
            "genre_ids": [
                878,
                12,
                28
            ],
            "id": 76600,
            "original_language": "en",
            "original_title": "Avatar: The Way of Water",
            "overview": "Set more than a decade after the events of the first film, learn the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.",
            "popularity": 336.921,
            "poster_path": "https://image.tmdb.org/t/p/w342/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg",
            "release_date": "2022-12-14",
            "title": "Avatar: The Way of Water",
            "video": false,
            "vote_average": 7.65,
            "vote_count": 10266
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/nnkiORKM1Q4AU1eWULI1PiWOTLu.jpg",
            "genre_ids": [
                16,
                12,
                28
            ],
            "id": 1029599,
            "original_language": "es",
            "original_title": "Aguila y Jaguar: Los Guerreros Legendarios",
            "overview": "In a post-apocalyptic future in which water has almost disappeared, two young survivors travel back in time to find the mythical power of the prehispanic God of water, and so be able to create the vital resource. However, when they arrive at the present they discover that the power is in the hands of an unscrupulous businessman who had always wanted to monopolize water and who knows everything about prehispanic myths. The Aztaya brotherhood, a group of heroes, successors from the legendary Aztec and Mayan warriors, will begin the adventure to prevent the villain's plan and help the travelers to change their sad future, teaming up to fight the powerful enemy and his dark allies. To win, the heroes will have to awake the greatest warriors of Aztec and Mayan mythology: The Eagle and the Jaguar.",
            "popularity": 20.025,
            "poster_path": "https://image.tmdb.org/t/p/w342/6qR9WbXYIddZcVk6nxFULfHcKmK.jpg",
            "release_date": "2022-09-29",
            "title": "Eagle and Jaguar, The Legendary Warriors",
            "video": false,
            "vote_average": 6.611,
            "vote_count": 36
        },
        {
            "adult": false,
            "backdrop_path": "https://image.tmdb.org/t/p/w342/jkKVLzLWjSvTnc84VzeljhSy6j8.jpg",
            "genre_ids": [
                10749,
                18
            ],
            "id": 820525,
            "original_language": "en",
            "original_title": "After Everything",
            "overview": "Besieged by writer’s block and the crushing breakup with Tessa, Hardin travels to Portugal in search of a woman he wronged in the past – and to find himself. Hoping to win back Tessa, he realizes he needs to change his ways before he can make the ultimate commitment.",
            "popularity": 212.149,
            "poster_path": "https://image.tmdb.org/t/p/w342/uQxjZGU6rxSPSMeAJPJQlmfV3ys.jpg",
            "release_date": "2023-09-13",
            "title": "After Everything",
            "video": false,
            "vote_average": 7.019,
            "vote_count": 564
        }
    ]