## Banking

Your bank is tired of its mainframe COBOL accounting software, and they hired both of you for a greenfield project in - what a happy coincidence

your favorite programming language!
Your task is to show them that your TDD-fu and your new-age programming language can cope with good ole COBOL!

Requirements
Write a class Account that offers the following methods void deposit(int) void withdraw(int) String printStatement()

An example statement would be:

```
Date        Amount  Balance
24.12.2015   +500      500
23.8.2016    -100      400
```

### Execute phpunit
You can execute phpunit directly with your local dependencies
```
vendor/bin/phpunit --bootstrap vendor/autoload.php tests
```
or you can use Docker using this bash script 
```
./test.sh
```
