# Blog generator with ai

This is a simple blog generator that uses the OpenAI API to generate a blog post from a given title and summary. It also uses the Google Cloud Speech to Text API to transcribe audio to text.

## Installation

```bash
composer install
```

Copy the `.env.example` file to `.env` and fill in the necessary details.

## Requirement
- php 8.1+
- composer
- OpenAI API Key


## Usage

This the command line type:
```cmd
php blogp-generator about "How to be a software developer"
```

Result:
```cmd  
Title: Envisioning a Career in Software Development: A Comprehensive Guide

There was a time when software development was nothing more than an obscure concept understood by just a select group. Today, it has transformed into a critical function that influences nearly every aspect of our lives. Consequently, the demand and allure of becoming a software developer have skyrocketed. If you're fascinated by coding, problem-solving, and creative innovation, this blog post will provide a comprehensive guide on becoming a software developer. 

Step 1: Gain a Clear Understanding of the Role 

Software developers are the creative brains behind computer programs. They create applications that allow users to perform specific tasks on computers or other devices and develop systems that operate devices or control networks. You should start by researching the field, understanding its demands, responsibilities, and potential career growth. 

Step 2: Obtain the Necessary Education

Software developers typically have a degree in computer science, software engineering, mathematics, or a related technical field. Some developers have even succeeded with an associate degree or self-taught route. These educational paths offer a solid foundation in learning programming languages, algorithms, data structures, and computer principles. 

Step 3: Learn to Code

Knowledge of programming languages is fundamental for a software developer. Start with the basics like Python, Java, or C++. There's an abundance of resources available online to learn to code for free or at a low cost. Codecademy, Udemy, Coursera, and Khan Academy are great platforms offering courses for beginners and advanced coders. 

Step 4: Build Projects 

Building your own projects is crucial. This doesn't only help you put theory into practice but also provides an excellent way to build a portfolio. An impressive portfolio can help showcase your programming skills and problem-solving abilities to potential employers.

Step 5: Gain Real-World Experience

Internships and entry-level positions offer an essential pathway to gaining practical experience. This not only provides a first-hand understanding of software development processes but also helps you acquire and perfect your skills.

Step 6: Keep Learning and Evolving 

The tech industry is an ever-changing landscape. New languages, tools, and technologies are constantly emerging. Being a successful software developer requires a commitment to lifelong learning. Regularly updating your knowledge and skills will keep you relevant and sought after in the job market. 

Lastly, developing soft skills, like communication and teamwork, is equally important. Unlike the common stereotype, software developing often requires working with a team and communicating complex ideas clearly and effectively.

Conclusion

Embarking on a career as a software developer can be deeply rewarding. It is a path lined with endless learning, creative challenges, and the gratifying result of seeing your code transform into a functioning program. With the right mindset, determination, and a relentless appetite for learning, the journey of becoming a software developer can be an exciting adventure. Here's to coding the future one line at a time!
```
