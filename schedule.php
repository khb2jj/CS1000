<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">  
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="author" content="Kirsten Bailey">
    <meta name="description" content="Schedule page">  
        
    <title>CS 1000 Schedule</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    
    <link rel="icon" href="computer.png"/>

    <style>
        .slideslink {
            font-size: 19px;
            font-weight:bold;
            color: #e048b5;
        }
        .assignlink {
            font-size: 20px;
            font-weight:bold;
            margin: 0; 
            color:#f55302; 
        }
        .readlink {
            font-size:16px;
            color:#0e6b01;
            font-weight:bold;
        }
        .week {
            font-size:20px;
        }

        table a:hover{
            color:black;
        }
    </style>
</head>

<body>
    <?php include('header.html')?>
    <table style="margin-left:40px; margin-right:40px; width:94%">
        <tr>
            <th style="width:15%">Date</th>
            <th style="width:30%">Slides</th>
            <th style="width:30%">Readings</th>
            <th style="width:25%">Assignments</th>
        </tr>
        
        <tr>
            <td colspan="4" class="week"><b>Week 1: August 24 - August 27</b></td>
        </tr>        
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">August 25</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/CourseIntroduction.pdf" style="margin:0">Course Introduction</a>
            </td>
            <td>
                <a target="_blank" href="syllabus.php" class="readlink">1. The syllabus </a> <br>
                <a target="_blank" href="https://franklinchen.com/blog/2011/12/09/why-everyone-should-learn-computer-science/" class="readlink">2. Why everyone should learn computer science </a>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">August 27</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/WhatIsCS.pdf" style="margin:0">What is computer science? Why should you care?</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.acm.org/binaries/content/assets/education/top-10-reasons-to-major-in-computing.pdf" style="margin:0">1. ACM's Reasons to Study CS</a> <br>
                <a target="_blank" class="readlink" href="https://www.britannica.com/science/computer-science" style="margin:0">2. Computer Science (read just the introduction)</a>
            </td>
            <td>
                <a target="_blank" class="assignlink" href="./assignments.php#assign1">Assignment 1 open</a>
            </td>
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 2: August 30 - September 3</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">August 30</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/PastPresentFuture.pdf" style="margin:0">CS in the past, present, & future</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://cs.uwaterloo.ca/~shallit/Courses/134/history.html" style="margin:0">1. History of Computer Science</a> <br>
                <a target="_blank" class="readlink" href="https://www.livescience.com/20718-computer-history.html" style="margin:0">2. A Brief Timeline</a>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">September 1</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/AtUVA.pdf" style="margin:0">CS at UVa</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://engineering.virginia.edu/departments/computer-science/cs-undergraduate-programs#accordion396963" style="margin:0">1. Explore the Curriculum</a>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">September 3</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/FTBUIntro.pdf">From the bottom up (FTBU) series introduction</a>
            </td>
            <td>
                <a target="_black" class="readlink" href="https://medium.datadriveninvestor.com/learn-to-code-or-do-anything-top-down-bottom-up-and-other-approaches-bd2fd8eb89dd">1. Learn to code (or do anything): Top down, bottom up, and other approaches</a>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 3: September 6 - September 10</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">September 6</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/Theory.pdf" style="margin:0">FTBU: Theory of computation</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://en.wikipedia.org/wiki/Theory_of_computation">1. What is Theory of Computation</a> <br>
                <a target="_blank" class="readlink" href="https://er.yuvayana.org/theory-of-computation-areas-history-importance/#:~:text=The%20importance%20to%20study%20the,of%20computer%20hardware%20and%20software.">2. Theory of Computation: areas, history & importance (focus on the importance section)</a>
            </td>
            <td>
                <a target="_blank" class="assignlink" href="assignments.php#assign1" style="margin: 0; color:#f55302; font-weight:bold">Assignment 1 due</a>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">September 8</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/Booleans.pdf" style="margin:0">FTBU: Binary, Boolean Logic, Boolean Arithmetic</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.mathsisfun.com/binary-number-system.html">1. Binary number system</a> <br>
                <a target="_blank" class="readlink" href="https://circuitglobe.com/binary-addition-and-subtraction.html">2. Binary addition and subtraction</a> <br>
                <a target="_blank" class="readlink" href="https://www.electronics-tutorials.ws/boolean/bool_7.html">3. Boolean algebra truth tables</a>
             </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">September 10</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/Memory.pdf" style="margin:0">FTBU: Booleans to memory</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://whatis.techtarget.com/definition/register">1. Registers</a> <br>
                <a target="_blank" class="readlink" href="https://www.digitaltrends.com/computing/what-is-ram/">2. What is RAM</a>

            </td>
            <td>
            <a target="_blank" class="assignlink" href="assignments.php#assign2" style="margin: 0; color:#f55302; font-weight:bold">Assignment 2 open</a>
            </td>
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 4: September 13 - September 17</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">September 13</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/CompArch.pdf" style="margin:0">FTBU: Computer architecture and program control</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.bbc.co.uk/bitesize/guides/zws8d2p/revision/3">1. The CPU and the fetch-execute cycle</a> <br>
                <a target="_blank" class="readlink" href="https://www.studytonight.com/computer-architecture/architecture-of-computer-system">2. Architecture of a computer system</a> <br>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">September 15</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/MachineLanguage.pdf" style="margin:0">FTBU: Machine language</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://techterms.com/definition/machine_language#:~:text=Machine%20language%2C%20or%20machine%20code,digits%20(ones%20and%20zeros).&text=Since%20computers%20are%20digital%20devices,as%20input%20by%20the%20CPU.">1. Machine language</a> <br>
                <a target="_blank" class="readlink" href="https://www.computerhope.com/jargon/m/machlang.htm">2. Another machine language description</a>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">September 17</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/Assembly.pdf" style="margin:0">FTBU: Assembly language</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.geeksforgeeks.org/difference-between-machine-language-and-assembly-language/">1. Difference between machine language and assembly language</a> <br>
                <a target="_blank" class="readlink" href="https://www.computerhope.com/jargon/a/al.htm">2. Assembly language</a>
            </td>
            <td>
                <a target="_blank" class="assignlink" href="assignments.php#assign2" style="margin: 0; color:#f55302; font-weight:bold">Assignment 2 due</a> <br>
                <a target="_blank" class="assignlink" href="assignments.php#assign3" style="margin: 0; color:#f55302; font-weight:bold">Assigment 3 open</a>
            </td>
            
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 5: September 20 - September 24</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">September 20</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/HighLevel.pdf" style="margin:0">FTBU: High level programming languages</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.bbc.co.uk/bitesize/guides/z4cck2p/revision/1">1. Types of programming languages</a> <br>
                <a target="_blank" class="readlink" href="https://www.geeksforgeeks.org/difference-between-high-level-and-low-level-languages/">2. Difference between high level and low level language</a>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">September 22</p>
            </td>
            <td>
                <p style="margin:0">Exam 1 Review</p>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">September 24</p>
            </td>
            <td colspan="3">
                <p style="font-size:28px; margin:0; color:#f55302; text-transform:uppercase">Exam 1 Covering Lectures up to Sept. 20</p>
            </td>
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 6: September 27 - October 1</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">September 27</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/DataOrgPart1.pdf" style="margin:0">Data & Data Organization</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://soshace.com/overview-of-basic-data-structures-how-to-organize-data-the-efficient-way/">1. Overview of basic data structures</a>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">September 29</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/DataOrgPart2.pdf" style="margin:0">Data & Data Organization, part 2</a>  
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.geeksforgeeks.org/difference-between-stack-and-queue-data-structures/">1. Difference between stack and queue data structures</a>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">October 1</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/Algorithms.pdf">Algorithms and Problem Solving</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://runestone.academy/runestone/books/published/pythonds/Introduction/WhatIsComputerScience.html">1. What is computer science (problem solving perspective)</a><br>
                <a target="_blank" class="readlink" href="https://www.geeksforgeeks.org/algorithms-design-techniques/">2. Algorithm design techniques</a>
            </td>
            <td>
                <a target="_blank" class="assignlink" href="assignments.php#assign3" style="margin: 0; color:#f55302; font-weight:bold">Assignment 3 due</a> <br>
                <a target="_blank" class="assignlink" href="assignments.php#assign4" style="margin: 0; color:#f55302; font-weight:bold">Assignment 4 open</a>
            </td>
        </tr>  
        
        <tr>
            <td colspan="4" class="week"><b>Week 7: October 4 - October 8</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">October 4</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/ProblemSolving.pdf" style="margin:0">Problem solving techniques</a> 
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.codingninjas.com/blog/2018/11/15/top-down-and-bottom-up-the-difference-between-the-two-programming-approaches/">1. Top-down and bottom-up: what's the difference?</a> <br>
                <a target="_blank" class="readlink" href="https://www.tutorialspoint.com/data_structures_algorithms/divide_and_conquer.htm">2. Data structures: divide and conquer</a>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">October 6</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/AlgorithmsRealWorldPart1.pdf" style="margin:0">Algorithms: Real World Examples</a>
            </td>
            <td>
                 <a target="_blank" class="readlink" href="https://www.programiz.com/blog/dsa-in-everyday-life/" style="margin:0">1. In everyday life (pay attention to algorithms section)</a>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">October 8</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/AlgorithmsRealWorldPart2.pdf" style="margin:0">Algorithms: Real World Examples Part 2</a> 
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.techiedelight.com/huffman-coding/">1. Huffman coding in depth (optional and a little too deep)</a>
            </td>
            <td>
                <a target="_blank" class="assignlink" href="assignments.php#assign4" style="margin: 0; color:#f55302; font-weight:bold">Assignment 4 due</a> <br>
                <a target="_blank" class="assignlink" href="assignments.php#assign5" style="margin: 0; color:#f55302; font-weight:bold">Assignment 5 open</a>
            </td>
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 8: October 13 - October 15</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">October 13</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/Evaluating.pdf" style="margin:0">Evaluating Algorithms</a> 
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.geeksforgeeks.org/analysis-of-different-sorting-techniques/">1. Analysis of different sorting algorithms</a>
            </td>
            <td>
                
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">October 15</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/CantSolve.pdf" style="margin:0">What computing problems can't we solve and why?</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://techplanet.today/post/are-there-problems-that-computers-cant-solve">1. Are there problems that computers can't solve?</a>
            </td>
            <td>
            </td>
            
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 9: October 18 - October 22</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">October 18</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/AIIntro.pdf">Artificial Intelligence Introduction</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://becominghuman.ai/introduction-to-artificial-intelligence-5fba0148ec99">1. Introduction to artificial intelligence</a><br>
                <a target="_blank" class="readlink" href="https://learn.g2.com/history-of-artificial-intelligence">2. History of artificial intelligence</a><br>
            </td>
            <td>
    
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">October 20</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/SearchPart1.pdf" style="margin:0">AI Search</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.javatpoint.com/search-algorithms-in-ai">1. Search algorithms in artificial intelligence</a> <br>
                <a target="_blank" class="readlink" href="https://www.geeksforgeeks.org/tree-traversals-inorder-preorder-and-postorder/">2. Tree traversal orders (don't worry about the code, just look at the algorithms)</a> <br>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">October 22</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/SearchPart2.pdf" style="margin:0">AI Search Part 2</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.javatpoint.com/ai-uninformed-search-algorithms">1. Uninformed search algorithms</a> <br>
                <a target="_blank" class="readlink" href="https://www.javatpoint.com/ai-informed-search-algorithms">2. Informed search algorithms</a> <br>
            </td>
            <td>
            <a target="_blank" class="assignlink" href="assignments.php#assign5" style="margin: 0; color:#f55302; font-weight:bold">Assignment 5 due </a> <br>
            <a target="_blank" class="assignlink" href="assignments.php#assign6" style="margin: 0; color:#f55302; font-weight:bold">Assignment 6 open</a>
            </td>
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 10: October 25 - October 29</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">October 25</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/SearchPractice.pdf" style="margin:0">AI Search Practice</a>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">October 27</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/AdvancedAI.pdf" style="margin:0">Advanced AI concepts</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://en.wikipedia.org/wiki/Applications_of_artificial_intelligence#:~:text=AI%20has%20been%20used%20to,education%2C%20transportation%2C%20and%20more.">1. Applications of artificial intelligence</a> <br>
                <a target="_blank" class="readlink" href="https://www.roboticsbusinessreview.com/ai/3-basic-ai-concepts-explain-artificial-intelligence/">2. Understanding 3 basic concepts</a>                
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">October 29</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/WebDevPart1.pdf" style="margin:0">Web design & development</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.invisionapp.com/design-defined/web-design-and-development/">1. Web Design and Development</a> <br>
                <a target="_blank" class="readlink" href="https://www.codeconquest.com/what-is-coding/web-design/">2. Intro to Web Design</a>
            </td>
            <td>
                <a target="_blank" class="assignlink" href="assignments.php#assign6" style="margin: 0; color:#f55302; font-weight:bold">Assignment 6 due</a> <br>
                <a target="_blank" class="assignlink" href="assignments.php#assign7" style="margin: 0; color:#f55302; font-weight:bold">Assignment 7 open</a>
            </td>
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 11: November 1 - November 5</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">November 1</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/WebDevPart2.pdf" style="margin:0">Web design & development, part 2</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://careerfoundry.com/en/tutorials/web-development-for-beginners/introduction-to-web-development/">1. A Website Design Tutorial (optional, but good practice)</a>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">November 3</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/Databases.pdf" style="margin:0">Databases</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://medium.com/@rwilliams_bv/intro-to-databases-for-people-who-dont-know-a-whole-lot-about-them-a64ae9af712">1. Intro to databases (for people who don't know a lot about them)</a>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">November 5</p>            
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/SecurityAndEthicsPart1.pdf" style="margin:0">Security, bad actors and ethical issues</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://ethics.acm.org/code-of-ethics/software-engineering-code/">1. Software engineering code of ethics</a> <br>
                <a target="_blank" class="readlink" href="https://www.iii.org/fact-statistic/facts-statistics-identity-theft-and-cybercrime">2. Facts & statistics about identity theft and cybercrime</a> <br>
                <a target="_blank" class="readlink" href="https://lib.pstcc.edu/csplagiarism/ip">3. What is intellectual property?</a>            
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 12: November 8 - November 12</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">November 8</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/SecurityAndEthicsPart2.pdf" style="margin:0">Security, bad actors and ethical issues, part 2</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://us.norton.com/internetsecurity-malware-what-is-a-computer-virus.html">1. What is a computer virus?</a> <br>
                <a target="_blank" class="readlink" href="https://computer.howstuffworks.com/virus.htm">2. How computer viruses work</a>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">November 10</p>
            </td>
            <td>
                <p style="margin:0">Exam 2 review</p>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">November 12</p>
            </td>
            <td colspan="3">
            <p style="font-size:28px; margin:0; color:#f55302; text-transform:uppercase">Exam 2 Covering Lectures From Sept. 27 To Nov. 8</p>
            </td>
        </tr>  
        
        <tr>
            <td colspan="4" class="week"><b>Week 13: November 15 - November 19</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">November 15</p>            
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/careers.pdf" style="margin:0">Careers in CS</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.usnews.com/education/best-graduate-schools/articles/2019-05-02/what-can-you-do-with-a-computer-science-degree">1. What can you do with a comp sci degree?</a>
            </td>
            <td>
                <a target="_blank" class="assignlink" href="assignments.php#assign7" style="margin: 0; color:#f55302; font-weight:bold">Assignment 7 due</a>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">November 17</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/BusinessAndFinance.pdf" style="margin:0">CS in business and finance</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://smallbusiness.chron.com/computers-used-marketing-44171.html">1. How computers are used in marketing</a> <br>
                <a target="_blank" class="readlink" href="https://en.wikipedia.org/wiki/Computational_finance#:~:text=Computational%20finance%20is%20a%20branch,realize%20financial%20models%20or%20systems.">2. Computational finance</a>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">November 19</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/Media.pdf" style="margin:0">CS in entertainment and media</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.computersciencedegreehub.com/faq/how-does-computer-science-impact-movies/">1. How does computer science impact movies?</a> <br>
                <a target="_blank" class="readlink" href="https://medium.com/@issa.memari/how-computer-science-can-help-diversify-content-and-sources-in-online-social-networks-d7bfe8ebcc29">2. How computer science can help diversify content and sources in online social networks</a>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td colspan="4" class="week"><b>Week 14: November 22 - November 23</b></td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">November 22</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/Healthcare.pdf" style="margin:0">CS in healthcare</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6257447/">1. Application of computer techniques in medicine</a> <br>
                <a target="_blank" class="readlink" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6691444/#:~:text=Primary%20care%20physicians%20can%20use,insight%20into%20patient's%20medical%20needs.">2. Overview of artificial intelligence in medicine</a> <br>
                <a target="_blank" class="readlink" href="https://healthinformatics.uic.edu/blog/when-healthcare-and-computer-science-collide/">3. When healthcare and computer science collide</a> <br>
                <a target="_blank" class="readlink" href="https://towardsdatascience.com/4-reasons-why-it-is-worth-learning-to-code-as-a-physician-medical-student-63ddc9695e8c">4. Four reasons why it is worth learning to code as a physician/medical student</a>
            </td>
            <td>
                <a target="_blank" class="assignlink" href="assignments.php#assign8" style="margin: 0; color:#f55302; font-weight:bold">Assignment 8 open</a>
            </td>
        </tr> 

        <tr>
            <td colspan="4" class="week"><b>Week 15: November 29 - December 3</b></td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">November 29</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/EnvironmentalScience.pdf" style="margin:0">CS in environmental science</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.computersciencedegreehub.com/faq/how-can-computer-science-help-the-environment/">1. How can computer science help the envrionment?</a> <br>
                <a target="_blank" class="readlink" href="https://www.sciencedaily.com/releases/2016/04/160420111133.htm">2. Computers play a crucial role in preserving the Earth </a> <br>
                <a target="_blank" class="readlink" href="https://www.cics.umass.edu/admissions/environmental-science">3. Envrionmental science and CS intersection course at University of Massachusetts</a>
            </td>
            <td>
            </td>
        </tr> 
        
        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/wednesday-calendar-daily-page.png">
                <p style="margin:0">December 1</p>
            </td>
            <td>
                <a target="_blank" class="slideslink" href="outlines/Biology.pdf" style="margin:0">CS in biology</a>
            </td>
            <td>
                <a target="_blank" class="readlink" href="https://www.computersciencedegreehub.com/faq/what-is-computational-biology/#:~:text=Computational%20biology%2C%20which%20is%20also,to%20solve%20biology%2Dbased%20problems.&text=Computational%20biology%20leverages%20quantitative%20tools,algorithm%20design%20and%20frequency%20statistics.">1. What is computational biology?</a> <br>
                <a target="_blank" class="readlink" href="https://www.nature.com/articles/d41586-018-07595-4">2. Computer logic meets cell biology</a> <br>
                <a target="_blank" class="readlink" href="https://blogs.unimelb.edu.au/sciencecommunication/2020/09/29/when-biology-and-computer-science-meet/">3. When biology and computer science meet</a>
            </td>
            <td>
            </td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/friday-daily-calendar-page.png">
                <p style="margin:0">December 3</p>
            </td>
            <td>
                <p style="margin:0">Course Wrapup/Moving Forward</p>
            </td>
            <td>
            </td>
            <td>
                <a target="_blank" class="assignlink" href="assignments.php#assign8" style="margin: 0; color:#f55302; font-weight:bold">Assignment 8 due</a>
            </td>
        </tr> 

        <tr>
            <td colspan="4" class="week"><b>Week 16: December 6 - December 7</b></td>
        </tr> 

        <tr>
            <td>
                <img style="width:45px; height:45px; padding:3px" src="png/monday-calendar-page.png">
                <p style="margin:0">December 6</p>
            </td>
            <td colspan="3">
                <p style="font-size:28px; margin:0; color:#f55302; text-transform:uppercase">Final exam covering all lectures</p>
            </td>
        </tr> 
    </table>
    <br>
</body>
</html>