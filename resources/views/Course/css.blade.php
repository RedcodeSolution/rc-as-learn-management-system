<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-end items-center" >
            <a href="/course/progress" class="text-black px-4 py-2 rounded">
                Progress
            </a>

            <a href="/course/quiz" class="text-black px-8 py-2 rounded">
                Quiz
            </a>
        </div>
    </x-slot>


    <div class="flex flex-col items-center min-h-screen">
        <h1 class="text-5xl font-bold mb-6 text-center">CSS Quiz</h1>

        <form id="quizForm" class="space-y-6" method="POST" action="/cssForm" >

            @csrf <!-- CSRF Token for security -->

<!--            <p class="text-5xl font-bold mb-6 text-center">-->
<!--                {{auth()->user()->id}}-->
<!--            </p>-->
            <input type="hidden" name="auth" value="{{auth()->user()->id}}">
            <!-- Question 1 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">1. What does CSS stand for?</p>
                <label><input type="radio" name="q1" value="Cascading Style Sheets" class="mr-2"> Cascading Style Sheets</label><br>
                <label><input type="radio" name="q1" value="Colorful Style Sheets" class="mr-2"> Colorful Style Sheets</label><br>
                <label><input type="radio" name="q1" value="Creative Style Sheets" class="mr-2"> Creative Style Sheets</label>
                @error('q1')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 2 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">2. Where in an HTML document is the correct place to refer to an external style sheet?</p>
                <label><input type="radio" name="q2" value="In the &lt;head&gt; section" class="mr-2"> In the &lt;head&gt; section</label><br>
                <label><input type="radio" name="q2" value="At the end of the document" class="mr-2"> At the end of the document</label><br>
                <label><input type="radio" name="q2" value="In the &lt;body&gt; section" class="mr-2"> In the &lt;body&gt; section</label>
                @error('q2')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 3 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">3. Which is the correct CSS syntax?</p>
                <label><input type="radio" name="q3" value="body {color: black;}" class="mr-2"> body {color: black;}</label><br>
                <label><input type="radio" name="q3" value="{body:color=black;}" class="mr-2"> {body:color=black;}</label><br>
                <label><input type="radio" name="q3" value="{body;color:black;}" class="mr-2"> {body;color:black;}</label>
                @error('q3')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 4 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">4. How do you insert a comment in a CSS file?</p>
                <label><input type="radio" name="q4" value="/* this is a comment */" class="mr-2"> /* this is a comment */</label><br>
                <label><input type="radio" name="q4" value="// this is a comment" class="mr-2"> // this is a comment</label><br>
                <label><input type="radio" name="q4" value="&lt;!-- this is a comment --&gt;" class="mr-2"> &lt;!-- this is a comment --&gt;</label>
                @error('q4')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 5 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">5. Which property is used to change the background color?</p>
                <label><input type="radio" name="q5" value="background-color" class="mr-2"> background-color</label><br>
                <label><input type="radio" name="q5" value="bgcolor" class="mr-2"> bgcolor</label><br>
                <label><input type="radio" name="q5" value="color" class="mr-2"> color</label>
                @error('q5')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 6 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">6. How do you add a background image in CSS?</p>
                <label><input type="radio" name="q6" value="background-image: url(image.jpg);" class="mr-2"> background-image: url(image.jpg);</label><br>
                <label><input type="radio" name="q6" value="background-img: url(image.jpg);" class="mr-2"> background-img: url(image.jpg);</label><br>
                <label><input type="radio" name="q6" value="image: url(image.jpg);" class="mr-2"> image: url(image.jpg);</label>
                @error('q6')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 7 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">7. How do you make the text bold in CSS?</p>
                <label><input type="radio" name="q7" value="font-weight: bold;" class="mr-2"> font-weight: bold;</label><br>
                <label><input type="radio" name="q7" value="text-bold: true;" class="mr-2"> text-bold: true;</label><br>
                <label><input type="radio" name="q7" value="font: bold;" class="mr-2"> font: bold;</label>
                @error('q7')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 8 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">8. Which property controls the text size?</p>
                <label><input type="radio" name="q8" value="font-size" class="mr-2"> font-size</label><br>
                <label><input type="radio" name="q8" value="font-style" class="mr-2"> font-style</label><br>
                <label><input type="radio" name="q8" value="text-size" class="mr-2"> text-size</label>
                @error('q8')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 9 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">9. How do you make each word in a text start with a capital letter?</p>
                <label><input type="radio" name="q9" value="text-transform: capitalize;" class="mr-2"> text-transform: capitalize;</label><br>
                <label><input type="radio" name="q9" value="text-transform: uppercase;" class="mr-2"> text-transform: uppercase;</label><br>
                <label><input type="radio" name="q9" value="text-transform: lowercase;" class="mr-2"> text-transform: lowercase;</label>
                @error('q9')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 10 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">10. How do you display hyperlinks without an underline in CSS?</p>
                <label><input type="radio" name="q10" value="a {text-decoration: none;}" class="mr-2"> a {text-decoration: none;}</label><br>
                <label><input type="radio" name="q10" value="a {underline: none;}" class="mr-2"> a {underline: none;}</label><br>
                <label><input type="radio" name="q10" value="a {text-style: no-underline;}" class="mr-2"> a {text-style: no-underline;}</label>
                @error('q10')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 11 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">11. Which CSS property is used to change the text color of an element?</p>
                <label><input type="radio" name="q11" value="color" class="mr-2"> color</label><br>
                <label><input type="radio" name="q11" value="font-color" class="mr-2"> font-color</label><br>
                <label><input type="radio" name="q11" value="text-color" class="mr-2"> text-color</label>
                @error('q11')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 12 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">12. Which CSS property is used to change the font of an element?</p>
                <label><input type="radio" name="q12" value="font-weight" class="mr-2"> font-weight</label><br>
                <label><input type="radio" name="q12" value="font-family" class="mr-2"> font-family</label><br>
                <label><input type="radio" name="q12" value="font-style" class="mr-2"> font-style</label>
                @error('q12')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 13 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">13. How do you make a list that lists its items with squares?</p>
                <label><input type="radio" name="q13" value="list-style-type: square;" class="mr-2"> list-style-type: square;</label><br>
                <label><input type="radio" name="q13" value="list-type: square;" class="mr-2"> list-type: square;</label><br>
                <label><input type="radio" name="q13" value="list-style: square;" class="mr-2"> list-style: square;</label>
                @error('q13')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 14 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">14. How do you make a text italic in CSS?</p>
                <label><input type="radio" name="q14" value="font-style: italic;" class="mr-2"> font-style: italic;</label><br>
                <label><input type="radio" name="q14" value="font-italic: true;" class="mr-2"> font-italic: true;</label><br>
                <label><input type="radio" name="q14" value="text-style: italic;" class="mr-2"> text-style: italic;</label>
                @error('q14')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 15 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">15. How do you make a border around an element?</p>
                <label><input type="radio" name="q15" value="border: 1px solid black;" class="mr-2"> border: 1px solid black;</label><br>
                <label><input type="radio" name="q15" value="border-style: solid;" class="mr-2"> border-style: solid;</label><br>
                <label><input type="radio" name="q15" value="border-width: 1px;" class="mr-2"> border-width: 1px;</label>
                @error('q15')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 16 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">16. How do you select an element with the id "header"?</p>
                <label><input type="radio" name="q16" value="#header" class="mr-2"> #header</label><br>
                <label><input type="radio" name="q16" value=".header" class="mr-2"> .header</label><br>
                <label><input type="radio" name="q16" value="header" class="mr-2"> header</label>
                @error('q16')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 17 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">17. How do you select elements with the class "intro"?</p>
                <label><input type="radio" name="q17" value=".intro" class="mr-2"> .intro</label><br>
                <label><input type="radio" name="q17" value="#intro" class="mr-2"> #intro</label><br>
                <label><input type="radio" name="q17" value="intro" class="mr-2"> intro</label>
                @error('q17')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 18 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">18. How do you group selectors in CSS?</p>
                <label><input type="radio" name="q18" value="Separate each selector with a space" class="mr-2"> Separate each selector with a space</label><br>
                <label><input type="radio" name="q18" value="Separate each selector with a plus sign" class="mr-2"> Separate each selector with a plus sign</label><br>
                <label><input type="radio" name="q18" value="Separate each selector with a comma" class="mr-2"> Separate each selector with a comma</label>
                @error('q18')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 19 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">19. How do you add padding to an element?</p>
                <label><input type="radio" name="q19" value="padding-left" class="mr-2"> padding-left</label><br>
                <label><input type="radio" name="q19" value="padding" class="mr-2"> padding</label><br>
                <label><input type="radio" name="q19" value="padding-width" class="mr-2"> padding-width</label>
                @error('q19')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 20 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">20. How do you add a shadow effect to an element in CSS?</p>
                <label><input type="radio" name="q20" value="box-shadow: 5px 5px 5px grey;" class="mr-2"> box-shadow: 5px 5px 5px grey;</label><br>
                <label><input type="radio" name="q20" value="shadow-box: 5px 5px 5px grey;" class="mr-2"> shadow-box: 5px 5px 5px grey;</label><br>
                <label><input type="radio" name="q20" value="element-shadow: 5px 5px 5px grey;" class="mr-2"> element-shadow: 5px 5px 5px grey;</label>
                @error('q20')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>


            <!-- Question 21 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">21. Which CSS property is used to control the space between lines of text?</p>
                <label><input type="radio" name="q21" value="a" class="mr-2"> spacing</label><br>
                <label><input type="radio" name="q21" value="b" class="mr-2"> line-spacing</label><br>
                <label><input type="radio" name="q21" value="c" class="mr-2"> line-height</label>
                @error('q21')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 22 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">22. How do you create a fixed navigation bar that stays at the top of the page?</p>
                <label><input type="radio" name="q22" value="a" class="mr-2"> position: fixed; top: 0;</label><br>
                <label><input type="radio" name="q22" value="b" class="mr-2"> position: relative; top: 0;</label><br>
                <label><input type="radio" name="q22" value="c" class="mr-2"> position: absolute; top: 0;</label>
                @error('q22')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 23 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">23. Which property is used to create space between the content and the border of an element?</p>
                <label><input type="radio" name="q23" value="a" class="mr-2"> padding</label><br>
                <label><input type="radio" name="q23" value="b" class="mr-2"> margin</label><br>
                <label><input type="radio" name="q23" value="c" class="mr-2"> spacing</label>
                @error('q23')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 24 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">24. What is the default value of the position property in CSS?</p>
                <label><input type="radio" name="q24" value="a" class="mr-2"> absolute</label><br>
                <label><input type="radio" name="q24" value="b" class="mr-2"> relative</label><br>
                <label><input type="radio" name="q24" value="c" class="mr-2"> static</label>
                @error('q24')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 25 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">25. How do you make an element invisible in CSS?</p>
                <label><input type="radio" name="q25" value="a" class="mr-2"> visibility: hidden;</label><br>
                <label><input type="radio" name="q25" value="b" class="mr-2"> display: none;</label><br>
                <label><input type="radio" name="q25" value="c" class="mr-2"> Both visibility: hidden; and display: none;</label>
                @error('q25')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 26 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">26. How do you change the background color of an element?</p>
                <label><input type="radio" name="q26" value="a" class="mr-2"> background-color</label><br>
                <label><input type="radio" name="q26" value="b" class="mr-2"> color</label><br>
                <label><input type="radio" name="q26" value="c" class="mr-2"> bg-color</label>
                @error('q26')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 27 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">27. How do you make the text bold in CSS?</p>
                <label><input type="radio" name="q27" value="a" class="mr-2"> font-weight: bold;</label><br>
                <label><input type="radio" name="q27" value="b" class="mr-2"> font-style: bold;</label><br>
                <label><input type="radio" name="q27" value="c" class="mr-2"> text-style: bold;</label>
                @error('q27')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 28 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">28. How do you make the text uppercase in CSS?</p>
                <label><input type="radio" name="q28" value="a" class="mr-2"> text-transform: uppercase;</label><br>
                <label><input type="radio" name="q28" value="b" class="mr-2"> font-transform: uppercase;</label><br>
                <label><input type="radio" name="q28" value="c" class="mr-2"> text-style: uppercase;</label>
                @error('q28')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 29 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">29. How do you add a hover effect to an element in CSS?</p>
                <label><input type="radio" name="q29" value="a" class="mr-2"> element:hover { }</label><br>
                <label><input type="radio" name="q29" value="b" class="mr-2"> element.hover { }</label><br>
                <label><input type="radio" name="q29" value="c" class="mr-2"> element:hover-effect { }</label>
                @error('q29')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 30 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">30. How do you set the height of an element?</p>
                <label><input type="radio" name="q30" value="a" class="mr-2"> height</label><br>
                <label><input type="radio" name="q30" value="b" class="mr-2"> set-height</label><br>
                <label><input type="radio" name="q30" value="c" class="mr-2"> size-height</label>
                @error('q30')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 31 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">31. How do you make an element take up the full width of its container?</p>
                <label><input type="radio" name="q31" value="a" class="mr-2"> width: 100%;</label><br>
                <label><input type="radio" name="q31" value="b" class="mr-2"> width: auto;</label><br>
                <label><input type="radio" name="q31" value="c" class="mr-2"> width: fill;</label>
                @error('q31')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 32 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">32. How do you create a flex container in CSS?</p>
                <label><input type="radio" name="q32" value="a" class="mr-2"> display: flex;</label><br>
                <label><input type="radio" name="q32" value="b" class="mr-2"> flex-container: true;</label><br>
                <label><input type="radio" name="q32" value="c" class="mr-2"> display: block;</label>
                @error('q32')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 33 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">33. How do you align items in a flex container along the main axis?</p>
                <label><input type="radio" name="q33" value="a" class="mr-2"> align-items</label><br>
                <label><input type="radio" name="q33" value="b" class="mr-2"> justify-content</label><br>
                <label><input type="radio" name="q33" value="c" class="mr-2"> align-content</label>
                @error('q33')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 34 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">34. How do you center an element horizontally in a flex container?</p>
                <label><input type="radio" name="q34" value="a" class="mr-2"> justify-content: center;</label><br>
                <label><input type="radio" name="q34" value="b" class="mr-2"> align-items: center;</label><br>
                <label><input type="radio" name="q34" value="c" class="mr-2"> display: flex;</label>
                @error('q34')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 35 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">35. How do you create a media query in CSS?</p>
                <label><input type="radio" name="q35" value="a" class="mr-2"> @media screen and (max-width: 600px)</label><br>
                <label><input type="radio" name="q35" value="b" class="mr-2"> @screen and (max-width: 600px)</label><br>
                <label><input type="radio" name="q35" value="c" class="mr-2"> @media-query (max-width: 600px)</label>
                @error('q35')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 36 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">36. How do you make a background image cover the entire area of an element?</p>
                <label><input type="radio" name="q36" value="a" class="mr-2"> background-size: cover;</label><br>
                <label><input type="radio" name="q36" value="b" class="mr-2"> background-fill: cover;</label><br>
                <label><input type="radio" name="q36" value="c" class="mr-2"> background-fit: cover;</label>
                @error('q36')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 37 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">37. How do you change the cursor icon when hovering over an element?</p>
                <label><input type="radio" name="q37" value="a" class="mr-2"> cursor: pointer;</label><br>
                <label><input type="radio" name="q37" value="b" class="mr-2"> hover-cursor: pointer;</label><br>
                <label><input type="radio" name="q37" value="c" class="mr-2"> pointer: hover;</label>
                @error('q37')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 38 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">38. Which CSS property controls the transparency of an element?</p>
                <label><input type="radio" name="q38" value="a" class="mr-2"> opacity</label><br>
                <label><input type="radio" name="q38" value="b" class="mr-2"> transparency</label><br>
                <label><input type="radio" name="q38" value="c" class="mr-2"> visibility</label>
                @error('q38')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 39 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">39. Which CSS property is used to change the spacing between letters?</p>
                <label><input type="radio" name="q39" value="a" class="mr-2"> letter-spacing</label><br>
                <label><input type="radio" name="q39" value="b" class="mr-2"> word-spacing</label><br>
                <label><input type="radio" name="q39" value="c" class="mr-2"> text-spacing</label>
                @error('q39')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 40 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">40. How do you create rounded corners for an element in CSS?</p>
                <label><input type="radio" name="q40" value="a" class="mr-2"> border-radius</label><br>
                <label><input type="radio" name="q40" value="b" class="mr-2"> corner-radius</label><br>
                <label><input type="radio" name="q40" value="c" class="mr-2"> radius-border</label>
                @error('q40')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 41 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">41. How do you change the font size of an element?</p>
                <label><input type="radio" name="q41" value="a" class="mr-2"> font-size</label><br>
                <label><input type="radio" name="q41" value="b" class="mr-2"> text-size</label><br>
                <label><input type="radio" name="q41" value="c" class="mr-2"> size-font</label>
                @error('q41')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 42 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">42. How do you make a list not display bullet points?</p>
                <label><input type="radio" name="q42" value="a" class="mr-2"> list-style-type: none;</label><br>
                <label><input type="radio" name="q42" value="b" class="mr-2"> bullet-style: none;</label><br>
                <label><input type="radio" name="q42" value="c" class="mr-2"> no-bullets: true;</label>
                @error('q42')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 43 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">43. How do you apply a shadow effect to text?</p>
                <label><input type="radio" name="q43" value="a" class="mr-2"> text-shadow</label><br>
                <label><input type="radio" name="q43" value="b" class="mr-2"> font-shadow</label><br>
                <label><input type="radio" name="q43" value="c" class="mr-2"> shadow-text</label>
                @error('q43')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 44 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">44. Which CSS property is used to control the space between an element’s content and its border?</p>
                <label><input type="radio" name="q44" value="a" class="mr-2"> padding</label><br>
                <label><input type="radio" name="q44" value="b" class="mr-2"> margin</label><br>
                <label><input type="radio" name="q44" value="c" class="mr-2"> spacing</label>
                @error('q44')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 45 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">45. How do you set the maximum width of an element?</p>
                <label><input type="radio" name="q45" value="a" class="mr-2"> max-width</label><br>
                <label><input type="radio" name="q45" value="b" class="mr-2"> width-max</label><br>
                <label><input type="radio" name="q45" value="c" class="mr-2"> max-size</label>
                @error('q45')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 46 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">46. What does the z-index property control?</p>
                <label><input type="radio" name="q46" value="a" class="mr-2"> The vertical stacking order of elements</label><br>
                <label><input type="radio" name="q46" value="b" class="mr-2"> The horizontal alignment of elements</label><br>
                <label><input type="radio" name="q46" value="c" class="mr-2"> The size of an element</label>
                @error('q46')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 47 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">47. How do you create an animation in CSS?</p>
                <label><input type="radio" name="q47" value="a" class="mr-2"> @keyframes</label><br>
                <label><input type="radio" name="q47" value="b" class="mr-2"> @animation</label><br>
                <label><input type="radio" name="q47" value="c" class="mr-2"> @motion</label>
                @error('q47')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 48 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">48. How do you make an element’s text overflow with ellipsis when it exceeds its container size?</p>
                <label><input type="radio" name="q48" value="a" class="mr-2"> text-overflow: ellipsis;</label><br>
                <label><input type="radio" name="q48" value="b" class="mr-2"> overflow: ellipsis;</label><br>
                <label><input type="radio" name="q48" value="c" class="mr-2"> text-wrap: ellipsis;</label>
                @error('q48')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 49 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">49. Which property is used to specify the stack order of an element?</p>
                <label><input type="radio" name="q49" value="a" class="mr-2"> z-index</label><br>
                <label><input type="radio" name="q49" value="b" class="mr-2"> order-index</label><br>
                <label><input type="radio" name="q49" value="c" class="mr-2"> stack-index</label>
                @error('q49')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <!-- Question 50 -->
            <div class="space-y-2">
                <p class="text-lg font-semibold">50. How do you set the transparency level of a color in CSS?</p>
                <label><input type="radio" name="q50" value="a" class="mr-2"> Using rgba or hsla</label><br>
                <label><input type="radio" name="q50" value="b" class="mr-2"> Using rgb or hsl</label><br>
                <label><input type="radio" name="q50" value="c" class="mr-2"> Using opacity</label>
                @error('q50')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>


            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-blue-500 text-white border px-6 py-2 rounded-lg">
                    Submit
                </button>
            </div>
        </form>

        <div id="results" class="mt-6 text-center"></div>
    </div>
</x-app-layout>
