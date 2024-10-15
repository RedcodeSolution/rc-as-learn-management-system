<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-end items-center" >
            <a href="/course/progress" class="text-black px-4 py-2 rounded">
                Progress
            </a>

        </div>
    </x-slot>

<div class="flex flex-col items-center min-h-screen">
        <h1 class="text-5xl font-bold mb-6 text-center">HTML Quiz</h1>


        <form id="quizForm" method="POST" action="/course" class="space-y-6">
            @csrf <!-- CSRF Token for security -->

<!--            <p class="text-5xl font-bold mb-6 text-center">-->
<!--                {{auth()->user()->id}}-->
<!--            </p>-->
            <input type="hidden" name="auth" value="{{auth()->user()->id}}">

            <div class="space-y-2">
                <p class="text-lg font-semibold">1. What does HTML stand for?</p>
                <label><input type="radio" name="q1" value="Hyper Text Markup Language" class="mr-2"> Hyper Text Markup Language</label><br>
                <label><input type="radio" name="q1" value="Home Tool Markup Language" class="mr-2"> Home Tool Markup Language</label><br>
                <label><input type="radio" name="q1" value="Hyperlinks and Text Markup Language" class="mr-2"> Hyperlinks and Text Markup Language</label>
                @error('q1')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">2. Who is making the Web standards?</p>
                <label><input type="radio" name="q2" value="Google" class="mr-2"> Google</label><br>
                <label><input type="radio" name="q2" value="Mozilla" class="mr-2"> Mozilla</label><br>
                <label><input type="radio" name="q2" value="The World Wide Web Consortium (W3C)" class="mr-2"> The World Wide Web Consortium (W3C)</label>
                @error('q2')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">3. Choose the correct HTML element for the largest heading:</p>
                <label><input type="radio" name="q3" value="h1" class="mr-2"> &lt;h1&gt;</label><br>
                <label><input type="radio" name="q3" value="h6" class="mr-2"> &lt;h6&gt;</label><br>
                <label><input type="radio" name="q3" value="heading" class="mr-2"> &lt;heading&gt;</label>
                @error('q3')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">4. What is the correct syntax for creating a hyperlink in HTML?</p>
                <label><input type="radio" name="q4" value="correct" class="mr-2"> &lt;a href="http://example.com"&gt;example&lt;/a&gt;</label><br>
                <label><input type="radio" name="q4" value="wrong1" class="mr-2"> &lt;a name="http://example.com"&gt;example&lt;/a&gt;</label><br>
                <label><input type="radio" name="q4" value="wrong2" class="mr-2"> &lt;a src="http://example.com"&gt;example&lt;/a&gt;</label>
                @error('q4')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">5. What is the correct HTML element for inserting a line break?</p>
                <label><input type="radio" name="q5" value="br" class="mr-2"> &lt;br&gt;</label><br>
                <label><input type="radio" name="q5" value="break" class="mr-2"> &lt;break&gt;</label><br>
                <label><input type="radio" name="q5" value="lb" class="mr-2"> &lt;lb&gt;</label>
                @error('q5')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">6. Which character is used to indicate an end tag?</p>
                <label><input type="radio" name="q6" value="/" class="mr-2"> /</label><br>
                <label><input type="radio" name="q6" value="*" class="mr-2"> *</label><br>
                <label><input type="radio" name="q6" value="<" class="mr-2"> &lt;</label>
                @error('q6')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">7. How can you make a numbered list?</p>
                <label><input type="radio" name="q7" value="<ol>" class="mr-2"> &lt;ol&gt;</label><br>
                <label><input type="radio" name="q7" value="<ul>" class="mr-2"> &lt;ul&gt;</label><br>
                <label><input type="radio" name="q7" value="<list>" class="mr-2"> &lt;list&gt;</label>
                @error('q7')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">8. How can you make a bulleted list?</p>
                <label><input type="radio" name="q8" value="<ul>" class="mr-2"> &lt;ul&gt;</label><br>
                <label><input type="radio" name="q8" value="<ol>" class="mr-2"> &lt;ol&gt;</label><br>
                <label><input type="radio" name="q8" value="<list>" class="mr-2"> &lt;list&gt;</label>
                @error('q8')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">9. What is the correct HTML for adding a background color?</p>
                <label><input type="radio" name="q9" value='<body bg="yellow">' class="mr-2"> &lt;body bg="yellow"&gt;</label><br>
                <label><input type="radio" name="q9" value='<body style="background-color:yellow;">' class="mr-2"> &lt;body style="background-color:yellow;"&gt;</label><br>
                <label><input type="radio" name="q9" value="<background>yellow</background>" class="mr-2"> &lt;background&gt;yellow&lt;/background&gt;</label>
                @error('q9')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">10. Choose the correct HTML element to define important text:</p>
                <label><input type="radio" name="q10" value="<strong>" class="mr-2"> &lt;strong&gt;</label><br>
                <label><input type="radio" name="q10" value="<important>" class="mr-2"> &lt;important&gt;</label><br>
                <label><input type="radio" name="q10" value="<b>" class="mr-2"> &lt;b&gt;</label>
                @error('q10')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>


            <div class="space-y-2">
                <p class="text-lg font-semibold">11. Choose the correct HTML element to define emphasized text:</p>
                <label><input type="radio" name="q11" value="<i>" class="mr-2"> &lt;i&gt;</label><br>
                <label><input type="radio" name="q11" value="<em>" class="mr-2"> &lt;em&gt;</label><br>
                <label><input type="radio" name="q11" value="<strong>" class="mr-2"> &lt;strong&gt;</label>
                @error('q11')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">12. Which HTML element is used to specify a footer for a document or section?</p>
                <label><input type="radio" name="q12" value="<footer>" class="mr-2"> &lt;footer&gt;</label><br>
                <label><input type="radio" name="q12" value="<bottom>" class="mr-2"> &lt;bottom&gt;</label><br>
                <label><input type="radio" name="q12" value="<section>" class="mr-2"> &lt;section&gt;</label>
                @error('q12')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">13. In HTML, which attribute is used to specify that an input field must be filled out?</p>
                <label><input type="radio" name="q13" value="placeholder" class="mr-2"> placeholder</label><br>
                <label><input type="radio" name="q13" value="required" class="mr-2"> required</label><br>
                <label><input type="radio" name="q13" value="value" class="mr-2"> value</label>
                @error('q13')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">14. Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?</p>
                <label><input type="radio" name="q14" value="title" class="mr-2"> title</label><br>
                <label><input type="radio" name="q14" value="alt" class="mr-2"> alt</label><br>
                <label><input type="radio" name="q14" value="src" class="mr-2"> src</label>
                @error('q14')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">15. Which doctype is correct for HTML5?</p>
                <label><input type="radio" name="q15" value="<!DOCTYPE html>" class="mr-2"> &lt;!DOCTYPE html&gt;</label><br>
                <label><input type="radio" name="q15" value="<!DOCTYPE HTML5>" class="mr-2"> &lt;!DOCTYPE HTML5&gt;</label><br>
                <label><input type="radio" name="q15" value='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">' class="mr-2"> &lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"&gt;</label>
                @error('q15')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">16. What is the correct HTML element for playing video files?</p>
                <label><input type="radio" name="q16" value="<video>" class="mr-2"> &lt;video&gt;</label><br>
                <label><input type="radio" name="q16" value="<movie>" class="mr-2"> &lt;movie&gt;</label><br>
                <label><input type="radio" name="q16" value="<media>" class="mr-2"> &lt;media&gt;</label>
                @error('q16')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">17. In HTML, onblur and onfocus are:</p>
                <label><input type="radio" name="q17" value="Style attributes" class="mr-2"> Style attributes</label><br>
                <label><input type="radio" name="q17" value="Event attributes" class="mr-2"> Event attributes</label><br>
                <label><input type="radio" name="q17" value="HTML elements" class="mr-2"> HTML elements</label>
                @error('q17')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">18. Which of these elements are all <strong>table</strong> elements?</p>
                <label><input type="radio" name="q18" value="<table>, <tr>, <tt>" class="mr-2"> &lt;table&gt;, &lt;tr&gt;, &lt;tt&gt;</label><br>
                <label><input type="radio" name="q18" value="<thead>, <body>, <tr>" class="mr-2"> &lt;thead&gt;, &lt;body&gt;, &lt;tr&gt;</label><br>
                <label><input type="radio" name="q18" value="<table>, <tr>, <td>" class="mr-2"> &lt;table&gt;, &lt;tr&gt;, &lt;td&gt;</label>
                @error('q18')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">19. How do you create a checkbox in HTML?</p>
                <label><input type="radio" name="q19" value='<input type="checkbox">' class="mr-2"> &lt;input type="checkbox"&gt;</label><br>
                <label><input type="radio" name="q19" value='<input type="check">' class="mr-2"> &lt;input type="check"&gt;</label><br>
                <label><input type="radio" name="q19" value="<check>" class="mr-2"> &lt;check&gt;</label>
                @error('q19')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">20. Which element defines navigation links?</p>
                <label><input type="radio" name="q20" value="<navigation>" class="mr-2"> &lt;navigation&gt;</label><br>
                <label><input type="radio" name="q20" value="<nav>" class="mr-2"> &lt;nav&gt;</label><br>
                <label><input type="radio" name="q20" value="<navigate>" class="mr-2"> &lt;navigate&gt;</label>
                @error('q20')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">21. Which HTML element is used to specify a header for a document or section?</p>
                <label><input type="radio" name="q21" value="&lt;header&gt;" class="mr-2"> &lt;header&gt;</label><br>
                <label><input type="radio" name="q21" value="&lt;top&gt;" class="mr-2"> &lt;top&gt;</label><br>
                <label><input type="radio" name="q21" value="&lt;head&gt;" class="mr-2"> &lt;head&gt;</label>
                @error('q21')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">22. Which is the correct HTML element for inserting an image?</p>
                <label><input type="radio" name="q22" value="&lt;image&gt;" class="mr-2"> &lt;image&gt;</label><br>
                <label><input type="radio" name="q22" value="&lt;img&gt;" class="mr-2"> &lt;img&gt;</label><br>
                <label><input type="radio" name="q22" value="&lt;picture&gt;" class="mr-2"> &lt;picture&gt;</label>
                @error('q22')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">23. How can you make an input field mandatory in HTML5?</p>
                <label><input type="radio" name="q23" value="&lt;input type='required'&gt;" class="mr-2"> &lt;input type="required"&gt;</label><br>
                <label><input type="radio" name="q23" value="&lt;input required&gt;" class="mr-2"> &lt;input required&gt;</label><br>
                <label><input type="radio" name="q23" value="&lt;input mandatory&gt;" class="mr-2"> &lt;input mandatory&gt;</label>
                @error('q23')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">24. How can you open a link in a new tab or window?</p>
                <label><input type="radio" name="q24" value="&lt;a href='url' new&gt;" class="mr-2"> &lt;a href="url" new&gt;</label><br>
                <label><input type="radio" name="q24" value="&lt;a href='url' target='_blank'&gt;" class="mr-2"> &lt;a href="url" target="_blank"&gt;</label><br>
                <label><input type="radio" name="q24" value="&lt;a href='url' open&gt;" class="mr-2"> &lt;a href="url" open&gt;</label>
                @error('q24')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">25. Which element is used to define an inline style in HTML?</p>
                <label><input type="radio" name="q25" value="style" class="mr-2"> style</label><br>
                <label><input type="radio" name="q25" value="class" class="mr-2"> class</label><br>
                <label><input type="radio" name="q25" value="id" class="mr-2"> id</label>
                @error('q25')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">26. Which HTML element is used to specify a list of pre-defined options?</p>
                <label><input type="radio" name="q26" value="&lt;list&gt;" class="mr-2"> &lt;list&gt;</label><br>
                <label><input type="radio" name="q26" value="&lt;datalist&gt;" class="mr-2"> &lt;datalist&gt;</label><br>
                <label><input type="radio" name="q26" value="&lt;optionlist&gt;" class="mr-2"> &lt;optionlist&gt;</label>
                @error('q26')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">27. What is the correct HTML for making a text input field?</p>
                <label><input type="radio" name="q27" value="&lt;input type='textfield'&gt;" class="mr-2"> &lt;input type="textfield"&gt;</label><br>
                <label><input type="radio" name="q27" value="&lt;input type='text'&gt;" class="mr-2"> &lt;input type="text"&gt;</label><br>
                <label><input type="radio" name="q27" value="&lt;input type='inputtext'&gt;" class="mr-2"> &lt;input type="inputtext"&gt;</label>
                @error('q27')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">28. How can you make an input field read-only?</p>
                <label><input type="radio" name="q28" value="&lt;input type='readonly'&gt;" class="mr-2"> &lt;input type="readonly"&gt;</label><br>
                <label><input type="radio" name="q28" value="&lt;input readonly&gt;" class="mr-2"> &lt;input readonly&gt;</label><br>
                <label><input type="radio" name="q28" value="&lt;input disabled&gt;" class="mr-2"> &lt;input disabled&gt;</label>
                @error('q28')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">29. Which attribute is used to specify a unique identifier for an HTML element?</p>
                <label><input type="radio" name="q29" value="class" class="mr-2"> class</label><br>
                <label><input type="radio" name="q29" value="id" class="mr-2"> id</label><br>
                <label><input type="radio" name="q29" value="name" class="mr-2"> name</label>
                @error('q29')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">30. What is the correct HTML element to group multiple options in a drop-down list?</p>
                <label><input type="radio" name="q30" value="&lt;optgroup&gt;" class="mr-2"> &lt;optgroup&gt;</label><br>
                <label><input type="radio" name="q30" value="&lt;optionlist&gt;" class="mr-2"> &lt;optionlist&gt;</label><br>
                <label><input type="radio" name="q30" value="&lt;optiongroup&gt;" class="mr-2"> &lt;optiongroup&gt;</label>
                @error('q30')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>


            <div class="space-y-2">
                <p class="text-lg font-semibold">31. What is the correct way to include a JavaScript file in HTML?</p>
                <label><input type="radio" name="q31" value="&lt;script src=&quot;script.js&quot;&gt;" class="mr-2"> &lt;script src="script.js"&gt;</label><br>
                <label><input type="radio" name="q31" value="&lt;javascript src=&quot;script.js&quot;&gt;" class="mr-2"> &lt;javascript src="script.js"&gt;</label><br>
                <label><input type="radio" name="q31" value="&lt;link href=&quot;script.js&quot;&gt;" class="mr-2"> &lt;link href="script.js"&gt;</label>
                @error('q31')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">32. What is the correct HTML element for a title of a document?</p>
                <label><input type="radio" name="q32" value="&lt;head&gt;" class="mr-2"> &lt;head&gt;</label><br>
                <label><input type="radio" name="q32" value="&lt;title&gt;" class="mr-2"> &lt;title&gt;</label><br>
                <label><input type="radio" name="q32" value="&lt;header&gt;" class="mr-2"> &lt;header&gt;</label>
                @error('q32')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">33. How can you define a table header in HTML?</p>
                <label><input type="radio" name="q33" value="&lt;th&gt;" class="mr-2"> &lt;th&gt;</label><br>
                <label><input type="radio" name="q33" value="&lt;head&gt;" class="mr-2"> &lt;head&gt;</label><br>
                <label><input type="radio" name="q33" value="&lt;header&gt;" class="mr-2"> &lt;header&gt;</label>
                @error('q33')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">34. Which HTML attribute is used to define inline styles?</p>
                <label><input type="radio" name="q34" value="class" class="mr-2"> class</label><br>
                <label><input type="radio" name="q34" value="style" class="mr-2"> style</label><br>
                <label><input type="radio" name="q34" value="css" class="mr-2"> css</label>
                @error('q34')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">35. Which HTML element is used to define the description list?</p>
                <label><input type="radio" name="q35" value="&lt;dl&gt;" class="mr-2"> &lt;dl&gt;</label><br>
                <label><input type="radio" name="q35" value="&lt;dd&gt;" class="mr-2"> &lt;dd&gt;</label><br>
                <label><input type="radio" name="q35" value="&lt;ds&gt;" class="mr-2"> &lt;ds&gt;</label>
                @error('q35')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">36. How can you specify the language of an HTML document?</p>
                <label><input type="radio" name="q36" value="&lt;meta lang=&quot;en&quot;&gt;" class="mr-2"> &lt;meta lang="en"&gt;</label><br>
                <label><input type="radio" name="q36" value="&lt;html lang=&quot;en&quot;&gt;" class="mr-2"> &lt;html lang="en"&gt;</label><br>
                <label><input type="radio" name="q36" value="&lt;body lang=&quot;en&quot;&gt;" class="mr-2"> &lt;body lang="en"&gt;</label>
                @error('q36')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">37. Which element is used to create a drop-down list in HTML?</p>
                <label><input type="radio" name="q37" value="&lt;select&gt;" class="mr-2"> &lt;select&gt;</label><br>
                <label><input type="radio" name="q37" value="&lt;input&gt;" class="mr-2"> &lt;input&gt;</label><br>
                <label><input type="radio" name="q37" value="&lt;dropdown&gt;" class="mr-2"> &lt;dropdown&gt;</label>
                @error('q37')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">38. How can you specify a default value for a drop-down list option in HTML?</p>
                <label><input type="radio" name="q38" value="selected" class="mr-2"> selected</label><br>
                <label><input type="radio" name="q38" value="default" class="mr-2"> default</label><br>
                <label><input type="radio" name="q38" value="chosen" class="mr-2"> chosen</label>
                @error('q38')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 39 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">39. Which HTML element is used to display a scalar measurement within a range?</p>
                <label><input type="radio" name="q39" value="&lt;meter&gt;" class="mr-2"> &lt;meter&gt;</label><br>
                <label><input type="radio" name="q39" value="&lt;progress&gt;" class="mr-2"> &lt;progress&gt;</label><br>
                <label><input type="radio" name="q39" value="&lt;range&gt;" class="mr-2"> &lt;range&gt;</label>
                @error('q39')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 40 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">40. What does the <code>alt</code> attribute in an <code>&lt;img&gt;</code> tag specify?</p>
                <label><input type="radio" name="q40" value="The image source" class="mr-2"> The image source</label><br>
                <label><input type="radio" name="q40" value="Alternative text for the image" class="mr-2"> Alternative text for the image</label><br>
                <label><input type="radio" name="q40" value="The image description" class="mr-2"> The image description</label>
                @error('q40')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>


            <!-- Question 41 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">41. How can you specify a hyperlink in an HTML document?</p>
                <label><input type="radio" name="q41" value="&lt;hyperlink&gt;" class="mr-2"> &lt;hyperlink&gt;</label><br>
                <label><input type="radio" name="q41" value="&lt;a href='url'&gt;" class="mr-2"> &lt;a href="url"&gt;</label><br>
                <label><input type="radio" name="q41" value="&lt;link href='url'&gt;" class="mr-2"> &lt;link href="url"&gt;</label>
                @error('q41')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 42 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">42. Which HTML element is used for bold text?</p>
                <label><input type="radio" name="q42" value="&lt;b&gt;" class="mr-2"> &lt;b&gt;</label><br>
                <label><input type="radio" name="q42" value="&lt;strong&gt;" class="mr-2"> &lt;strong&gt;</label><br>
                <label><input type="radio" name="q42" value="Both &lt;b&gt; and &lt;strong&gt;" class="mr-2"> Both &lt;b&gt; and &lt;strong&gt;</label>
                @error('q42')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 43 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">43. What is the purpose of the <code>&lt;footer&gt;</code> element in HTML?</p>
                <label><input type="radio" name="q43" value="It defines the top section of the document" class="mr-2"> It defines the top section of the document</label><br>
                <label><input type="radio" name="q43" value="It defines a footer for a document or section" class="mr-2"> It defines a footer for a document or section</label><br>
                <label><input type="radio" name="q43" value="It defines the main content of the document" class="mr-2"> It defines the main content of the document</label>
                @error('q43')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 44 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">44. Which HTML tag is used to define a list item?</p>
                <label><input type="radio" name="q44" value="&lt;li&gt;" class="mr-2"> &lt;li&gt;</label><br>
                <label><input type="radio" name="q44" value="&lt;ul&gt;" class="mr-2"> &lt;ul&gt;</label><br>
                <label><input type="radio" name="q44" value="&lt;ol&gt;" class="mr-2"> &lt;ol&gt;</label>
                @error('q44')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 45 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">45. Which of the following is an HTML5 semantic element?</p>
                <label><input type="radio" name="q45" value="&lt;div&gt;" class="mr-2"> &lt;div&gt;</label><br>
                <label><input type="radio" name="q45" value="&lt;article&gt;" class="mr-2"> &lt;article&gt;</label><br>
                <label><input type="radio" name="q45" value="&lt;span&gt;" class="mr-2"> &lt;span&gt;</label>
                @error('q45')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 46 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">46. How do you create a table in HTML?</p>
                <label><input type="radio" name="q46" value="&lt;table&gt;" class="mr-2"> &lt;table&gt;</label><br>
                <label><input type="radio" name="q46" value="&lt;tgrid&gt;" class="mr-2"> &lt;tgrid&gt;</label><br>
                <label><input type="radio" name="q46" value="&lt;grid&gt;" class="mr-2"> &lt;grid&gt;</label>
                @error('q46')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 47 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">47. Which HTML element is used to create a text area for user input?</p>
                <label><input type="radio" name="q47" value="&lt;textarea&gt;" class="mr-2"> &lt;textarea&gt;</label><br>
                <label><input type="radio" name="q47" value="&lt;input type='text'&gt;" class="mr-2"> &lt;input type="text"&gt;</label><br>
                <label><input type="radio" name="q47" value="&lt;input type='textarea'&gt;" class="mr-2"> &lt;input type="textarea"&gt;</label>
                @error('q47')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 48 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">48. What is the purpose of the <code>&lt;head&gt;</code> element in HTML?</p>
                <label><input type="radio" name="q48" value="It contains metadata and links to resources" class="mr-2"> It contains metadata and links to resources</label><br>
                <label><input type="radio" name="q48" value="It defines the body of the document" class="mr-2"> It defines the body of the document</label><br>
                <label><input type="radio" name="q48" value="It displays content in the browser" class="mr-2"> It displays content in the browser</label>
                @error('q48')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 49 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">49. Which HTML tag is used to insert a line break?</p>
                <label><input type="radio" name="q49" value="&lt;br&gt;" class="mr-2"> &lt;br&gt;</label><br>
                <label><input type="radio" name="q49" value="&lt;lb&gt;" class="mr-2"> &lt;lb&gt;</label><br>
                <label><input type="radio" name="q49" value="&lt;break&gt;" class="mr-2"> &lt;break&gt;</label>
                @error('q49')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 50 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">50. What is the correct HTML element for inserting a horizontal line?</p>
                <label><input type="radio" name="q50" value="&lt;hr&gt;" class="mr-2"> &lt;hr&gt;</label><br>
                <label><input type="radio" name="q50" value="&lt;line&gt;" class="mr-2"> &lt;line&gt;</label><br>
                <label><input type="radio" name="q50" value="&lt;horizontal&gt;" class="mr-2"> &lt;horizontal&gt;</label>
                @error('q50')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>


            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                    Submit Quiz
                </button>
            </div>
        </form>

        <div id="results" class="mt-6 text-center"></div>
    </div>
</x-app-layout>

