<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">  
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="author" content="Kirsten Bailey">
    <meta name="description" content="Assignments page">  
        
    <title>CS 1000 Assignments</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    
    <link rel="icon" href="computer.png"/>
    <style>
        h1 {
            font-family: "Lexend", sans-serif;
            color:darkslategray;
            font-size: 40px; 
        }
    </style>
</head>

<body>
    <?php include('header.html')?>
    <div style="margin-left:10px;">
        <h1 id="assign1">Assignment 1</h1>
        <p>Future work</p>
        <h1 id="assign2">Assignment 2</h1>
        <p>Future work</p>
        <h1 id="assign3">Assignment 3</h1>
        <p>For this assignment, imagine that you are a computer. Your task is to write yourself machine
        language that corresponds to your instructions for getting ready in the morning. The tasks that 
        you must complete in the morning are </p>
            <ol>
                <li>Get out of bed.</li>
                <li>Take a shower.</li>
                <li>Brush your teeth.</li>
                <li>Brush your hair.</li>
                <li>Put on your outfit consisting of a tshirt, jeans, and sandals. You have a choice in the 
                color of your shirt, but it must be either red, green, or blue.</li>
                <li>Make breakfast. You have the option to make oatmeal, eggs, or cereal.</li>
                <li>Log onto your first zoom call.</li>
            </ol>
        <p>
        To complete the assignment, you must create machine language instructions corresponding to each of 
        the steps above. For example, your machine code instruction for brushing your teeth may be something like
        100100. Your instructions can be of any bit length, but all of the instructions must be the same length. The 
        instructions for each step must be unique in order to get rid of any ambiguities. For example, you don't
        want to have an instruction that could mean to both brush your teeth and to brush your hair. <br> <br>
        When creating your language, take into account the fact that you should minimize the number of bits needed
        to express the instructions to reduce the space that the instructions take up in your head. If you can express 
        all of the instruction using 6 bits per instruction instead of 8, you should do that. <br> <br>
        For instructions like "brush your teeth" and "brush your hair", consider making part of the instruction correspond 
        to "brush" and another part of the instruction correspond to the part that needs brushing. This same idea is represented
        in computer machine language. For example, the beginning of the machine code for adding two numbers is always the same.
        What differs is the bits that represent the numbers being added. <br><br>
        Have fun with this assignment. Adding other steps in the routine is also encouraged and will be rewarded with extra credit!
        </p>
        

        <h1 id="assign4">Assignment 4</h1>
        <p>Future work</p>
        <h1 id="assign5">Assignment 5</h1>
        <p>Future work</p>
        <h1 id="assign6">Assignment 6</h1>
        <p>Future work</p>
        <h1 id="assign7">Assignment 7</h1>
        <p>Future work</p>
        <h1 id="assign8">Assignment 8</h1>
        <p>Future work</p>

    </div>
</body>
</html>