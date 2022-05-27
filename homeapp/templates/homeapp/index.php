{% load static %}
<!DOCTYPE html>
<html>
<head>
    <title>
        Career guide for students during course selection - Careerguide
    </title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="16×16" href="{% static 'assets/images/pages.png' %}" />
    <meta name="author" content="Francis Mugambi" />

    <meta name="description"
        content="An organized  career guide for students in course selection and the steps to follow in choosing careers that fits in the current modern world" />
    <meta name="keywords" content="careerguide,Career guide,career guidance" />
    
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

     <style>
        body {
            background-color: #fafafa;
        }

        #body {
            margin: auto;
            max-width: 1000px;
            background-color: white;
            padding: 20px;
        }
        #body ul li {
            font-size: 14px;
        }
       li  .active2{
        color: orange;
        }

        @media screen and (max-width: 994px) {
            #body h1 {
                font: 20px bold;
            }

            #body h2 {
                font: 17px bold;
            }

            #body h3 {
                font: 15px bold;
            }
        }

        @media screen and (max-width: 1200px) {
            #body {
                margin: 0 10px 0 10px;
            }

            #body h1 {
                font: 27px bold;
            }

            #body h2 {
                font: 20px bold;
            }

            #body h3 {
                font: 17px bold;
            }
        }

        #body h1 {
            color: teal;
            font: 28px bold;
        }

        #body h2 {
            color: teal;
            font: 21px bold;
        }

        #body h3 {
            color: teal;
            font: 18px bold;
        }
        #scroll a{
            color: red;
        }
    </style>

</head>

<body>

    {% include 'homeapp/header.php' %}

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="color:white; font-size: 19px;">
          <span>The best careerguide website for:</span><br>
          <span>Students</span>
        </div>
      </div>
    </div>
  </section>
    <div id="body">
        {{passme}}
        <div style="margin: 10px 10px 0px 10px">
            <h1 class="w3-topbar w3-bottombar w3-border-green" style="font-size: 22px">
                Career Guidance for Students
            </h1>
            <div class="w3-container">
                <p>
                    Many students lack the basic knowledge of choosing career after their secondary
                    education bofore joining the university or college. One of the major problem is that many of
                    them don't know much about the courses offerred by the higher learning institutions. The other
                    challenge
                    is that many students dont know that getting the cutt-off
                    points to join a university or a College does not mean that you have
                    qualified to parsue all the courses offered in all universities or
                    colleges. There is a limit depending on your averange score and also
                    the subjects that you sat for the KCSE exam.
        
                </p>
                <p>
                    I feel that secondary students should be informed and be trained on
                    how "to go about it" when choosing a career path early enough before
                    they sit for their final exams, for istance, may be your dream have
                    been to study Bachelor of Science in Electrical Engeneering when you
                    join campus. But did you know that many Degree Engeneering courses
                    requires high score to study them and be sponsored by the government
                    in the university (at least a strong B+) else you can sponser yourself
                    under the parallel program of which many of our parents cannot aford
                    because it's expensive.
                </p>
                <p>
                    What if an average student who always thought in her/his mind that
                    she/he will study medicine after secondary education only to realize
                    that to study medicine you have to score very high score which may be
                    difficult to achieve according to their ability? That's not even a
                    "big" problem, A problem comes during the time of course sellection
                    when a huge list of courses is given to the students to choose only a
                    few from the list. The question is do they even know anything about
                    all the courses on the list given to them? The answer is NO! This
                    automatically leads to wrong decision when choosing a career
                    course.<strong>Visit these links to get a brief Description of
                        <a href="/Degree_courses" style="color: red">Degree</a>,
                        <a href="/Diploma_courses" style="color: red">Diploma</a>,
                        <a href="/Certificate_courses" style="color: red">Certificate</a></strong>
                    Courses.
                </p>
                <p>
                    This career guide will teach you on how to choose your career path. It
                    wil help you to understand more about career and also the steps you
                    need to follow to choose your career wisely. I would like to thank the
                    Ministry of Higher Education, Science and Technology, Ministry of
                    Basic Education and Consultants who contributed immensely to make this
                    career guide a reality.
                </p>
                <p>
                    You can click the links below to skip to the Sub-topics of your
                    choice.
                </p>
            </div>
            <div class="w3-container" id="scroll">
                <a href="#career">what is a career?</a><br />
                <a href="#career_goals">How to Focus on Career Goals</a><br />
                <a href="#career_types">Types of Careers and Personalities</a><br />
                <a href="#careet_steps">How to choose a career explained in step by step basis</a><br />
                <a href="#career_questions">The most Frequently Asked Questions about careers in Kenya</a><br />
                <a href="#career_fields">The most Competitive career fields to choose from Today</a><br />
                <a href="#subject_career_choices">Subjects and their Career Choices</a><br />
                <a href="#career_myths">Some false beliefs on careers you should ignore</a><br />
                <a href="#career_goals_reality">How Turn your career goals into reality</a><br />
                <a href="#time_management">The Best Time management tips</a><br />
                <a href="#part_time_jobs">The most important skills to master that employers look for</a><br />
                <a href="#earn_respect">The best way to earn respect.</a><br />
                <a href="/Approved_programmes">The list of accredited | approved courses offered in kenya.</a><br />
            
            </div>
        </div>
        <div class="w3-container">
            <div class="w3-container">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="career">
                    what is a career?
                </h2>
                <p>
                    A career is a job, occupation or profession that gives one an
                    opportunity to progress in some ways that are important to a person,
                    especially one requiring special training, followed as one's lifework:
                </p>
                <div style="font-size: 20px">In summary</div>
                <ul>
                    <li>A career is very important to you.</li>
                    <li>It constitutes your purpose.</li>
                    <li>It is a process of your self-discovery.</li>
                    <li>It defines your life style.</li>
                </ul>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="career_goals">
                    How to Focus on Career Goals
                </h2>
                <div class="w3-container">
                    <quote>"The biggest challenge is to stay focused. It’s to have the
                        discipline when there are so many competing things." - Alexa
                        Hirschfield</quote>
                    <p>
                        Unlike the hyena, the lion is a super predator. It often selects its
                        prey from a herd. It does not necessarily choose the weakest animal.
                        Once it has locked its vision on one animal, it gives a chase to the
                        very end. It does not change its mind even if it by-passes a slower
                        animal. This is how focused people chase their dream careers by
                        shutting out all distractions. So,
                        <strong>how do you chase your dream?</strong>
                    </p>
                    <h3>Have a specific goal</h3>
                    <p>
                        People who succeed know exactly what they want in life. They do not
                        entertain any distraction or confusion. A specific goal ensures that
                        you do not waste your time, efforts and resources.
                    </p>
                    <h3>Visualize your goals</h3>
                    <p>
                        Create a mental picture of what you want to be. That which can be
                        easily visualized, can be easily actualized. In your vision, address
                        the following questions:
                    </p>
                    <ul>
                        <li>Whom will I be 10 years from now?</li>
                        <li>Where will I be?</li>
                        <li>Who will be with me?</li>
                        <li>Where will I be living?</li>
                        <li>Where will I be going for holidays?</li>
                        <li>What type of a car will I be driving?</li>
                        <li>How much will I be earning?</li>
                    </ul>
                    <p>
                        When you talk about your goals, they begin to take a vivid shape. Be
                        cautious of pessimists who will always reduce the size of your goals
                        and show you problems in every situation. Seek guidance from your
                        parents, teachers, guardians mentors and professionals. There is no
                        short cut to hard work. It is not enough to dream and do nothing.
                        You must wake up and work out your dreams.
                    </p>
                </div>
                <div class="w3-container">
                    <h3>Be Determined</h3>
                    <p>
                        Determination is the source of momentum in your studies. You can
                        only overcome challenges and obstacles in your career path with
                        determination. Nobody ever became a champion without obstacles. Some
                        people give up easily when faced with obstacles. Success is judged
                        by how you finish and not how you start.
                    </p>
                    <h3>Value yourself</h3>
                    <p>
                        This is your sense of personal worth. Be convinced of your ability
                        to achieve your career goals. People with low self esteem don’t set
                        high goals. Your self esteem is the source of motivation and
                        confidence that are necessary for you to achieve your career dreams.
                        God created you for a purpose. Build certain values around yourself
                        such as diligence and hard work.
                    </p>
                    <h3>Have a good mentor</h3>
                    <p>
                        Mentors are people who have succeeded in the field you want to
                        pursue. If you admire good mentors, they will influence you
                        positively towards your goals. Mentors are a source of inspiration.
                        By sharing with your mentors, it becomes easy to know the challenges
                        and opportunities in your chosen career.
                    </p>
                    <h3>Think positively</h3>
                    <p>
                        If you think positively about your career path you will attract
                        positive results. Think big. Avoid prophets of doom who thrive in
                        discouraging others.
                    </p>
                </div>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="career_types">
                    Types of Careers and Personalities
                </h2>
                <div class="w3-container">
                    <p>
                        You may have realized that certain people never fit in certain jobs
                        no matter how qualified or hard they work. For example, some people
                        find it difficult to sit down in offices the whole day. They are at
                        their best and happiest working out-doors with their hands. This is
                        because we all have different traits which determine whom we
                        actually are.
                        <em>There are six broad career types in which different people
                            fit</em>. These are the realistic, investigative, artistic, social careers,
                        enterprising and conventional careers.
                    </p>
                    <h3>1. Realistic careers</h3>
                    <p>
                        These are the skills and technical-orient-ed jobs. Work here
                        involves tangible and practical skills where people work with tools,
                        machines, plants and animals. The people in these jobs are highly
                        practical and physically strong. They often enjoy dealing with
                        things rather than people. They are good in technical subjects such
                        as: Agriculture, Metalwork, Woodwork, Homescience, Technical
                        Drawing, Drawing and Design among others.
                    </p>
                    <span><b>They excel in:</b></span><br>
                    <ul>
                        <li>
                            All kinds of engineering such as electrical mechanical and
                            Agricultural engineering
                        </li>
                        <li>Wildlife management</li>
                        <li>Wood science and technology</li>
                        <li>Armed forces and related careers</li>
                    </ul>
                    <h3>2. Investigative careers</h3>
                    <p>
                        The professionals here are scientific and laboratory-oriented. They
                        have a high curiosity, intellectual input and empirical approach to
                        issues. Their work involves analyzing facts, solving puzzles,
                        dealing with charts, numbers, formulae, graphs and data processing.
                        These people enjoy observing, studying, analyzing, interpreting and
                        solving complex challenges. They do well in leadership positions,
                        social gatherings and activities.
                    </p>
                    <h3>They are good in:</h3>
                    <ul>
                        <li>Mathematics and the sciences</li>
                        <li>Business studies</li>
                    </ul>
                    <span><b>They excel in:</b></span><br>
                    <ul>
                        <li>Medicine</li>
                        <li>Architecture</li>
                        <li>Microbiology and related courses</li>
                        <li>Criminal investigations</li>
                        <li>
                            Accounting, statisticaI analysis money, financial and related
                            fields
                        </li>
                        <li>Veterinary, zoology and related fields</li>
                        <li>Computer science and information communication technology</li>
                    </ul>
                    <h3>3.Artistic careers</h3>
                    <p>
                        Those who excel in these careers are arts-oriented, creative,
                        expressive and aesthetically conscious. Their jobs involve a lot of
                        magination. Consequently, those who excel here are highly original,
                        emotional, non conforming, unconventional, independent, idealist and
                        introspective. They take risks and like producing distinct products.
                    </p>
                    <h3>They are good in:</h3>
                    <ul>
                        <li>Languages</li>
                        <li>Literature</li>
                        <li>Drawing and design</li>
                        <li>Music</li>
                    </ul>
                    <span><b>They excel in:</b></span><br>
                    <ul>
                        <li>Drama and theatre arts</li>
                        <li>Graphic designing</li>
                        <li>Literary studies</li>
                        <li>Writing, painting and poetry</li>
                        <li>Acting</li>
                        <li>Home decorating, fabric designing</li>
                        <li>Photography, singing, drawing cartoons</li>
                    </ul>
                    <h3>4. Social careers</h3>
                    <p>
                        These involve working with people.Those who excel here have an inner
                        urge for helping others. They like training, informing,
                        enlightening, arbitrating and organizing other people. They are
                        sociable, friendly, understanding, empathetic, generous, helpful,
                        cooperative, responsible and hard Working. Often, they are sober,
                        welfare - minded and articulate.
                    </p>
                </div>
                <div class="w3-container">
                    <h3>They are good in:</h3>
                    <ul>
                        <li>Languages</li>
                        <li>Literature</li>
                        <li>Humanities</li>
                    </ul>
                    <p>
                        They can also be good in the sciences if they put more interest and
                        effort in them.
                    </p>
                    <span><b>They excel in:</b></span><br>
                    <ul>
                        <li>Administration</li>
                        <li>Education</li>
                        <li>Law</li>
                        <li>Theology</li>
                        <li>Journalism and mass communication</li>
                        <li>Human and public relations</li>
                        <li>Political science and related fields</li>
                        <li>Counseling</li>
                    </ul>
                    <h3>5. Enterprising careers</h3>
                    <p>
                        These careers involve influencing is a lot of goal and profit
                        orientation in these jobs. Those who excel are enterprising,
                        ambitious, talkative, argumentative and domineering people. They are
                        also energetic, self confident, optimistic, sociable, competitive,
                        impulsive and persuasive. They enjoy chairing meetings and
                        committees. Often they run for elected offices, head important
                        functions and motivate others
                    </p>
                    <h3>They are good in:</h3>
                    <ul>
                        <li>Mathematics</li>
                        <li>Business studies</li>
                        <li>Science</li>
                    </ul>
                    <span><b>They excel in:</b></span><br>
                    <ul>
                        <li>Business management</li>
                        <li>Sales and marketing</li>
                        <li>Hotel management</li>
                        <li>Politics</li>
                        <li>Industrial consultancy and related fields</li>
                    </ul>
                    <h3>6. Conventional careers</h3>
                    <p>
                        The careers here involve highly orderly, routine and practical jobs.
                        Often, there are some inflexible activities. Those who excel have a
                        common denominator of being obedient, practical, calm and orderly.
                        They are also efficient and conforming.
                    </p>
                    <h3>They are good in:</h3>
                    <ul>
                        <li>Business studies</li>
                        <li>Computer and office practice</li>
                        <li>Home science</li>
                        <li>Sciences</li>
                    </ul>
                    <span><b>They excel in:</b></span><br>
                    <ul>
                        <li>Accounting</li>
                        <li>Bookkeeping</li>
                        <li>Auditing</li>
                        <li>Statistics</li>
                        <li>Inventory control</li>
                        <li>Store keeping</li>
                        <li>Secretarial</li>
                        <li>Office management and</li>
                        <li>Computer operations</li>
                    </ul>
                    <h3>7. Adventuring</h3>
                    <p>
                        This involves being involved in situations and tasks that require
                        physical endurance, competing with others, and some degree of
                        risk-taking. People with this career interest enjoy involvement in
                        athletics, working in the military/law enforcement professions and
                        participating in risky and adventurous events. They usually get
                        satisfaction from competing with others where they have
                        opportunities to win and/or win by working with others in a team.
                        They often seek out excitement and are generally quite confident of
                        their physical abilities and skills.
                    </p>
                </div>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="careet_steps">
                    How to choose a career explained in step by step basis
                </h2>
                <div class="w3-container">
                    <p>
                        To make a good career choice, start with yourself. You need to
                        consider your interests, abilities, preferences and then plan your
                        career choices accordingly.
                    </p>
                    <h3>There are five steps that you can follow:</h3>
                    <p>
                        Identify careers related to your interests, abilities and
                        preferences Planning your career depends on the quality of career
                        information available to you. As you begin to explore your-career
                        options, consider the following resources and strategies:
                    </p>
                    <ul>
                        <li>
                            Ask the librarian or the school career office about books and
                            pamphlets on careers.
                        </li>
                        <li>
                            Join a club that undertakes activities in the line of what you
                            want to be. For example, wildlife club can be a good entry into
                            agricultural and environmental sciences.
                        </li>
                        <li>
                            Visit a place where people do the kind of work you are interested
                            in.
                        </li>
                        <li>Use the Internet to research for fields of your interest.</li>
                        <li>
                            Try out a hobby or volunteer to work in areas related to the kind
                            of careers you are interested in.
                        </li>
                        <li>
                            Contact professional groups such as the Law Society of Kenya,
                            Association of Kenyan Insurers, Architectural
                        </li>
                        <li>
                            Association of Kenya etc for more career information.Narrow down
                            your choices to a few careers for further exploration. As you
                            narrow down your list of potential careers, think of the following
                            questions:
                        </li>
                        <li>
                            What careers are likely to provide me with short-term and
                            long-term satisfaction?
                        </li>
                        <li>
                            Are there careers that seem to reflect my interests, abilities and
                            preferences better than others?
                        </li>
                        <li>What is the future of the careers that I am considering?</li>
                        <li>
                            Am I willing to get the education background and training to get
                            into the careers I am interested in?
                        </li>
                        <li>
                            What are the positive and negative factors associated with each
                            career that I am considering?
                        </li>
                    </ul>
                    <h3>Get the right preparation for your career</h3>
                    <p>
                        Consider now how to get the right preparation to your dream career.
                        Preparation includes choosing the right subjects at form three that
                        institutions of higher education require to train you in a
                        particular career. Some jobs require apprenticeship, vocational
                        technical training, two-year college training or four years at
                        university. These are in addition to the KCSE level of education.
                    </p>
                </div>
                <div class="w3-container">
                    <h3>Increasing demand for specialization</h3>
                    <p>
                        It is important to realize that some jobs are on the decline as you
                        make your career choices. For example, clerical and other
                        secretarial jobs are fading away fast as a result of
                        computerization. From the traditional ‘’specialized professions ”
                        like doctors, and accountants, information technology and
                        engineering, business management and consultancy are the professions
                        in demand now.
                    </p>
                    <h3>Universal skills</h3>
                    <p>
                        Irrespective of the career you choose, there are universal skills
                        and qualities that you need. And the earlier you develop them the
                        better. These are:
                    </p>
                    <ul>
                        <li>Computer literacy</li>
                        <li>Presentation skills (written & oral)</li>
                        <li>English language skills</li>
                        <li>Basic mathematics and numeracy skills</li>
                        <li>Intelligence</li>
                        <li>Self confidence</li>
                        <li>Willingness to accept responsibility</li>
                        <li>Innovation- can you bring new ideas and suggestions?</li>
                        <li>Inter-personal skills can you get along with other people?</li>
                        <li>Ability to handle conflict.</li>
                        <li>Honesty</li>
                        <li>Organisation</li>
                        <li>Career ambition</li>
                        <li>Persuasiveness</li>
                    </ul>
                    <p>
                        From the foregoing, your career choice is a process, not an event.
                        It takes time and many amendments and reconsideration.
                    </p>
                    <h3>Your Career choice is an Individual choice</h3>
                    <p>
                        It is you alone who will live with your desired career and not other
                        people. But other people can be of great help to you.
                    </p>
                    <h3>They include:</h3>
                    <ul>
                        <li>Your teachers who can guide you and give you information.</li>
                        <li>
                            Your parents who can help you make up your mind & introduce you to
                            career.
                        </li>
                        <li>People in the fields you desire to join.</li>
                        <li>
                            At times you can be wrong and your teachers and parents right.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="career_questions">
                    The most Frequently Asked Questions about careers in Kenya
                </h2>
                <div class="w3-container">
                    <quote>"The art and science of asking questions is the source of all
                        knowledge." - Thomas Berger</quote>
                    <h3>
                        Question: What is the cut-off point in admission to university?
                    </h3>
                    <p>
                        The cut-off point refers to the least points required for one tobe
                        admitted to public universities under government scholarships. The
                        points are fixed by the public universities’ Joint Admissions Board.
                        In the last two years, the cut-off points have been 67 for boys and
                        65 for girls. The points, however, vary depending on the
                        government-sponsored slots available in the specific year and the
                        performance in the KCSE examination for the year.
                    </p>
                    <h3>
                        Question: Can I get University education if I don’t meet the Kenya
                        Universities and Colleges Central Placement Service cut-off points?
                    </h3>
                    <p>
                        Anybody who scores grade C Plus and above qualifies to join either
                        private or public universities under the selfsponsored programme.
                    </p>
                    <h3>Question: What is bridging?</h3>
                    <p>
                        A bridging course is a short preuniversity programme in which
                        students uplift their cluster subjects that they did not do well in
                        KCSE prior to joining the self sponsored degree course. For example,
                        the four cluster subjects for enrolling in any degree course. The
                        minimum score in each of these four cluster subjects is C Plus.
                        Bridging will be recommended in a subject where the score is less
                        than C Plus.
                    </p>
                    <h3>
                        Question: Can I ever get into university if I score less than C Plus
                        in KCSE?
                    </h3>
                    <p>
                        Yes, you can but you will follow a different route from those who
                        score the minimum university entry grade. Some professionals with
                        the highest level of niversity education today started with
                        certificate courses. They then upgraded their skills by going
                        through diploma and degree courses. If you may have to follow this
                        route, the only limitation in getting into a university is you.
                    </p>
                    <h3>
                        Question: I want to be a doctor. I am good in science subjects but
                        very poor in mathematics. Can I qualify?
                    </h3>
                    <p>
                        You have a big task ahead of you. The cluster subjects for doing
                        medicine are Maths / Physics, Biology and Chemistry. Other subjects
                        areEnglish or Kiswahili or any other that you will have performed
                        well, but to get admitted to university in the first place you need
                        some minimum aggregate points from the seven subjects that will be
                        counted in your KCSE. And the counting takes into consideration the
                        following seven subjects:
                    </p>
                    <ul>
                        <li>Mathematics</li>
                        <li>English</li>
                        <li>Kiswahili</li>
                        <li>Two science subjects</li>
                        <li>One humanity subject</li>
                        <li>
                            Any other subject you have done well (a second humanity or a third
                            science or business studies or a technical subject or a foreign
                            language).
                        </li>
                    </ul>
                    <p>
                        Note that the score in Mathematics, English, Kiswahili, two science
                        subjects and at least one humanity subject must be counted even if
                        you score grade E in them. These are the core subjects. This is how
                        a low score in Mathematics can harm you and deny you the raw cluster
                        points for pursuing Medicine. Dedicate yourself whole heartedly to
                        Mathematics and score at least a C Plus grade in it and in the other
                        three subjects of the cluster.
                    </p>
                </div>
                <div class="w3-container">
                    <h3>Question: Which subjects are known as boosters?</h3>
                    <p>
                        These are the non-core subjects in your KCSE grading. Actually a
                        booster is the seventh subject that is counted while the Kenya
                        National Examinations Council is computing your mean grade. So, work
                        hard in that booster subject for it to improve your overall mean
                        grade.
                    </p>
                    <h3>
                        Question: When choosing a career, am I supposed to base it on my
                        Interests or on the subjects that I do well?
                    </h3>
                    <p>
                        You need to consider both your interests and the subjects that you
                        do well in your career decision. But at times your interests may be
                        at variance with the subjects required to pursue certain courses. In
                        such cases, you have to change your mind and go where your academic
                        abilities lead you.
                    </p>
                    <h3>
                        Question: I am fairly good in all subjects but the problem is that I
                        have never been able to pinpoint what I can do. What career should I
                        follow?
                    </h3>
                    <p>
                        you can think of a few careers. Make an honest soul search and write
                        down at least four careers you think you can do. Examine each in
                        turn by speaking with people in it, visiting the actual workplace
                        and reading all information about the job. This way, you can narrow
                        down your choices to one or two.
                    </p>
                    <h3>
                        Question; Can I study Medicine with Physics and Chemistry only
                        without Biology?
                    </h3>
                    <p>
                        No! All careers dealing with living things, such as Medicine,
                        forestry and fisheries require one to have studied Biology at
                        secondary school level. In the same way, all kinds of engineering
                        require Physics.
                    </p>
                    <h3>
                        Question: Can I pursue two careers at the same time in university?
                    </h3>
                    <p>
                        Why would you need to do so? To study two careers, for example, Law
                        and Bachelor of Commerce would be a hard and an unnecessary task.
                    </p>
                    <h3>
                        Question: I have realised that to study history or a foreign
                        language in university a good grade in Mathematics is always a
                        requirement. Why is this so?
                    </h3>
                    <p>
                        The law of demand and supply is in operation here. Scores of
                        students qualify to join institutions of higher learning every year
                        yet the vacancies are always few. So, the institutions have devised
                        methods of elimination so that they can only enroll the very best
                        every year. It is a requirement to score highly in core KCSE
                        subjects, which include Mathematics.
                    </p>
                </div>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="career_fields">
                    The most Competitive career fields to choose from Today
                </h2>
                <div class="w3-container">
                    <quote>"Opportunities don’t happen, you create them." - Chris
                        Grosser</quote>
                    <p>
                        There are numerous career opportunities in the various
                        social-economic fields. Students are advised to choose a career from
                        the field they are interested in. They should also ensure they are
                        good in the subjects relevant to the field. To cover a wide range of
                        careers, we have classified them into broad categories as follows;
                    </p>
                    <h3>1. Agriculture and Related Careers</h3>
                    <p>
                        These include careers related to plant and animal science. It also
                        includes careers in crop and animal production, pest and disease
                        control and animal science. Careers in horticulture and floriculture
                        are also included. Examples are agribusiness management,
                        agricultural and bio-systems engineering, agricultural business
                        management, agricultural economics, agricultural economics and
                        resource management and agricultural education and extension.
                    </p>
                    <h3>2. Architecture, Building and Related Careers.</h3>
                    <p>
                        These include careers in the field of building and construction.
                        Other areas include land economics, landscaping, urban and regional
                        planning, civil and tructural engineering, construction management,
                        landscape and architecture.
                    </p>
                    <h3>3. Beauty, Fashion and Related Careers</h3>
                    <p>
                        They include careers in fashion, textile, interior and exterior
                        designs. It also includes careers in beauty, hairdressing and
                        modeling. Other jobs are fashion design and marketing, clothing,
                        textile and interior design and apparel and fashion technology.
                        Interior designers need a combination of both science and art
                        related skills, which include the ability to work with technical
                        details as well as keenness on fashion, style and trends.
                    </p>
                    <h3>4. Business Related Careers</h3>
                    <p>
                        These include careers in commerce and industry such as marketing,
                        insurance, finance, investment, banking and entrepreneurship. Other
                        related jobs include accounting, actuarial science, banking and
                        finance, business management, business administration, cooperative
                        management, micro-finance and marketing.
                    </p>
                    <h3>5. Community Development Related Careers</h3>
                    <p>
                        These include careers in sociology, social work and community
                        development, cutting across a variety of settings that include
                        schools, hospitals and the general community. The jobs here include
                        social studies, gender studies,social work, population studies,
                        justice and peace, participatory project planning, disaster
                        management and community development.
                    </p>
                    <h3>6. Creative Arts and Entertainment Related Careers</h3>
                    <p>
                        These include careers in fine art and related areas, cartoon
                        industry, photography, music and theatre. Other jobs include sports
                        technology, recreation and management, physical education, fine art,
                        creative arts, theatre arts, cultural studies, drama and theatre
                        studies. The work environment includes advertising, publishing
                        (books, newspapers, magazines) and electronic media (television,
                        radio) industries.
                    </p>
                    <h3>7. Diplomacy and Public Relations Related Careers</h3>
                    <p>
                        These include careers in public relations as well as in diplomatic
                        assignment, international relations, justice and peace and political
                        sciences. One needs to have the ability to work with people of
                        diverse backgrounds, good communication skills and patience.
                    </p>
                    <h3>8. Education Related Careers</h3>
                    <p>
                        These include careers in teaching at all levels. The careers also
                        include education administrators such as education officers and
                        teachers in special education programmes.
                    </p>
                    <h3>9. Engineering Related Careers</h3>
                    <p>
                        These include careers in the different areas of engineering cutting
                        across diverse fields such as electrical, mechanical, civil,
                        agricultural, chemical and environmental and computer engineering.
                    </p>
                    <h3>10. Environmental management and conservation related careers</h3>
                    <p>
                        These include careers in air, water, land management and
                        conservation, forestry, wildlife and fisheries. Other jobs are land
                        economics, urban and regional planning, science and technology,
                        wildlife management, environmental health, environmental science and
                        wetlands management and conservation.
                    </p>
                    <h3>11. Entrepreneurship and Related Careers</h3>
                    <p>
                        Entrepreneurship cuts across all fields where there is need to look
                        at organizations and institutions as business enterprises. They also
                        include careers in entrepreneurial de-velopment, commerce and
                        business administration.
                    </p>
                    <h3>12. Geography and Related Careers</h3>
                    <p>
                        These include careers in geology, survey and mapping, cartography,
                        meteorology, oceanography, remote sensing and astronomy. Others are
                        natural resources, ecotourism, mining, geography, and environmental
                        science.
                    </p>
                </div>
                <div class="w3-container">
                    <h3>13. Guidance, Counseling and Related careers</h3>
                    <p>
                        These include careers in guidance, counseling, psychology in
                        religious, industrial and community related fields. The work
                        includes guidance and counseling, counseling psychology, education
                        and counseling, pastoral counseling and social work.
                    </p>
                    <h3>14. Health Related Careers</h3>
                    <p>
                        These include medicine, dentistry, pharmacy, nursing, medical
                        technology, radiography and physiotherapy. Careers in this field
                        require students with good mental ability and aptitude to think
                        logically, keen, alert and quick in interpretation, warm
                        personality, patient and commitment to serve mankind.
                    </p>
                    <h3>15. Home Science, Food Technology and Related Careers</h3>
                    <p>
                        These include careers in nutrition, dietetics technology and fashion
                        design and textile technology.
                    </p>
                    <h3>16. Hospitality and Related Careers</h3>
                    <p>
                        These include careers in the various departments in the hotel
                        industry, travel and tourism related areas. The jobs include hotel
                        and restaurant management tourism management, home economics and
                        food science and nutrition. Others are foreign languages, hotel and
                        institutional management, hotel and hospitality management and
                        travel and tours operation management.
                    </p>
                    <h3>17. History and Related Careers</h3>
                    <p>
                        These include careers related to archaeology, anthropology and
                        political science, among others. Those with interest in this area
                        need to have interest in getting information, are curious and have
                        deep interest in the past.
                    </p>
                    <h3>
                        18. Information, Communication Technology (ICT) and Related Careers
                    </h3>
                    <p>
                        These include careers in computer industry including computer
                        hardware and software. The category also includes careers in library
                        and information science, computer technology and computer science.
                        Others are information sciences, information systems technology,
                        computer applications, web design, networking and communication
                        systems.
                    </p>
                    <h3>19. Journalism Related Careers</h3>
                    <p>
                        These include careers in print journalism and electronic journalism
                        such as information sciences, communications media technology,
                        journalism and media studies and communication technology.
                    </p>
                    <h3>20. Law Related Careers</h3>
                    <p>
                        Careers in these area deal with governance and justice which ensure
                        people’s stability and confidence in their country. This category
                        includes careers relating to matters of law in the mainstream as
                        well as those in the para-legal field such as court clerks.
                    </p>
                    <h3>21. Management and Administration Related Careers</h3>
                    <p>
                        These include careers in different specializations of management in
                        such areas as sales and marketing, finance, human resource
                        management, production among others. The jobs here include business
                        administration and management, international operations management,
                        purchasing and supplies management, human resource management,
                        tourism management and marketing management.
                    </p>
                    <h3>22. Manufacturing and Processing Related Careers</h3>
                    <p>
                        These include careers in manufacturing and processing industries in
                        both food and non-food related areas. The jobs here include
                        industrial and production planning and management, manufacturing
                        engineering technology, industrial chemistry, food science and
                        technology, chemical processing engineering, production engineering
                        and analytical chemistry.
                    </p>
                    <h3>23. Research and Statistics Related Careers</h3>
                    <p>
                        These include careers in research and statistics related areas which
                        cut across different and dynamic fields such as education, health,
                        business, marketing, information communication technology (ICT)
                        among others.
                    </p>
                    <h3>24. Security Related Careers</h3>
                    <p>
                        These include careers in defence, (army, navy, air force)
                        paramilitary, police and intelligence services. It also includes
                        jobs in private security firms as well as careers related
                        administration.
                    </p>
                    <h3>25. Sports and Physical Education Related Careers</h3>
                    <p>
                        Career in sports is still in its early stages of development in
                        Kenya. There is a lot of potential and opportunities sports can
                        offer. Currently, there are many Kenyans earning a living from
                        athletics, football and other sports. All you require is energy,
                        drive, passion, enthusiasm, agility and perseverance.
                    </p>
                    <h3>26. Transport and Communication Services Related Careers</h3>
                    <p>
                        These include careers in the shipping, aviation, railway and road
                        transport sec-tors. One requires alertness, courage, determination
                        and physical fitness. The person should be self-confident, reliable,
                        calm and able to take charge in an emergency.
                    </p>
                </div>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="subject_career_choices">
                    Subjects and their Career Choices
                </h2>
                <div class="w3-container">
                    <quote>"The only way to do great work is to love what you do. If you
                        haven’t found it yet, keep looking. Don’t settle." - Steve
                        Jobs</quote>
                    <p>
                        The subjects that you take in school form an important basis for
                        your career choices. Training for particular careers requires
                        specific subject combinations. Below are several categories of
                        careers grouped according to their subject requirements. Some
                        careers appear in more than one category because they require
                        different subjects. See how your career ambitions relate with the
                        subjects you are studying in school.
                    </p>
                    <h3>Mathematics</h3>
                    <p>
                        A vast range of careers need Mathematics and a good grade in the
                        subject will open doors for you. <br />These include:
                    </p>
                    <ul>
                        <li>Architecture</li>
                        <li>Building and land economics</li>
                        <li>Construction management</li>
                        <li>Design</li>
                        <li>Economics</li>
                        <li>High school Mathematics teaching</li>
                        <li>Medicine</li>
                        <li>Nursing</li>
                        <li>Dentistry</li>
                        <li>Database administration</li>
                        <li>Geology</li>
                        <li>Catering</li>
                        <li>Horticulture</li>
                        <li>Information technology</li>
                        <li>Agriculture</li>
                        <li>Accounting and auditing</li>
                        <li>Biomedical sciences</li>
                        <li>Biotechnology</li>
                        <li>Insurance</li>
                        <li>Business management</li>
                        <li>Engineering</li>
                        <li>Information sciences</li>
                        <li>Statistics</li>
                        <li>Actuarial science</li>
                        <li>Agribusiness management</li>
                        <li>Computer science</li>
                        <li>Entrepreneurship Physics</li>
                    </ul>
                    <h3>Physics</h3>
                    <p>You need a good grade in physics to pursue the following:</p>
                    <ul>
                        <li>Electrical & electronics engineering</li>
                        <li>Aeronautical engineering</li>
                        <li>Mechanical engineering</li>
                        <li>Civil and structural engineering</li>
                        <li>Computer science</li>
                        <li>Medical engineering</li>
                        <li>Building economics</li>
                        <li>High school physics teaching Physics</li>
                        <li>Telecommunications</li>
                        <li>Surveying</li>
                        <li>Geology</li>
                        <li>Physiotherapy</li>
                        <li>Aviation/pilot</li>
                        <li>Radiography</li>
                        <li>Systems engineering</li>
                        <li>Information technology</li>
                    </ul>
                    <h3>English Language</h3>
                    <p>
                        English is a core subject in our education system. It is a
                        prerequisite subject in understanding all the other subjects except
                        for Kiswahili and foreign languages. The following careers need good
                        qualifications in English:
                    </p>
                    <ul>
                        <li>Drama and theatre arts</li>
                        <li>Advertising</li>
                        <li>Air hostess/cabin crew</li>
                        <li>Banking</li>
                        <li>Beauty therapy</li>
                        <li>Broadcasting</li>
                        <li>Business management</li>
                        <li>Computing and information sciences</li>
                        <li>Correctional services</li>
                        <li>Medicine</li>
                        <li>Economics</li>
                        <li>Entrepreneurship</li>
                        <li>Estate management</li>
                        <li>Design</li>
                        <li>Hotel and hospitality</li>
                        <li>Insurance</li>
                        <li>Journalism</li>
                        <li>Library and information sciences</li>
                        <li>Law</li>
                        <li>Management consultancy</li>
                        <li>Music</li>
                        <li>Human resource management</li>
                        <li>Pharmacy</li>
                        <li>Aviation/piloting</li>
                        <li>Policing and law enforcement</li>
                        <li>Psychology</li>
                        <li>Public relations</li>
                        <li>Publishing</li>
                        <li>Sales and marketing</li>
                        <li>Secretarial</li>
                        <li>Social work</li>
                        <li>Teaching</li>
                        <li>Tour operations</li>
                    </ul>

                    <h3>Business Studies</h3>
                    <p>
                        Though business studies is not strictly specified as a qualification
                        to pursue many courses in college and university, it is an added
                        advantage for those who have studied it. You get a big boost when
                        you have done business studies and are Scaling Career Heights - Step
                        by Step Career Guide for Students pursuing the following:
                    </p>
                </div>
                <div class="w3-container">
                    <ul>
                        <li>Accounting</li>
                        <li>Actuarial science</li>
                        <li>Advertising</li>
                        <li>Banking</li>
                        <li>Management</li>
                        <li>Database administration</li>
                        <li>Building and land economics</li>
                        <li>Planning</li>
                        <li>Design</li>
                        <li>Entrepreneurship</li>
                        <li>Hotel and hospitality</li>
                        <li>Human resource management</li>
                        <li>Information technology</li>
                        <li>Computing</li>
                        <li>Insurance</li>
                        <li>Journalism</li>
                        <li>Leisure management</li>
                        <li>Logistics</li>
                        <li>Library and information science</li>
                        <li>Sales and marketing</li>
                        <li>Public relations</li>
                        <li>Surveying</li>
                        <li>Retail management</li>
                        <li>Social work</li>
                        <li>Teaching</li>
                        <li>Economics</li>
                    </ul>
                    <h3>Humanities</h3>
                    <p>
                        Humanities include Geography, History and Religious education
                        (Islamic,Hindu and Christian). The following careers require a good
                        grade in humanities:
                    </p>
                    <ul>
                        <li>Advertising</li>
                        <li>Architecture</li>
                        <li>Law</li>
                        <li>Building economics</li>
                        <li>Food science and technology</li>
                        <li>Horticulture</li>
                        <li>Hotel and hospitality</li>
                        <li>Journalism</li>
                        <li>Aviation/piloting</li>
                        <li>Surveying</li>
                        <li>Social work</li>
                        <li>Teaching</li>
                        <li>Tour guide and operations</li>
                        <li>Soil science and conservation</li>
                        <li>Planning</li>
                        <li>Child welfare</li>
                        <li>Business administration and management</li>
                        <li>Publishing</li>
                        <li>Counseling</li>
                        <li>Correctional services</li>
                        <li>Sales and marketing</li>
                        <li>Administration</li>
                        <li>Consultancy</li>
                        <li>International relations</li>
                        <li>Diplomacy and community affairs.</li>
                    </ul>
                    <h3>Biology</h3>
                    <p>
                        There are many careers that require a good grade in Biology.
                        <br />They include:
                    </p>
                    <ul>
                        <li>Medicine</li>
                        <li>Pharmacy</li>
                        <li>Nursing</li>
                        <li>Dentistry</li>
                        <li>Botany and zoology</li>
                        <li>Food science and technology</li>
                        <li>Biochemistry</li>
                        <li>Biomedical science and Biotechnology</li>
                        <li>Environmental and Public health</li>
                        <li>Forestry</li>
                        <li>Wildlife and range management</li>
                        <li>Horticulture</li>
                        <li>Veterinary medicine</li>
                        <li>Dairy science and technology</li>
                        <li>Agriculture</li>
                        <li>Environmental sciences</li>
                        <li>High school Biology teaching</li>
                        <li>Sports science</li>
                        <li>Health education</li>
                        <li>Physiotherapy</li>
                        <li>Beauty therapy</li>
                        <li>Chemical engineering</li>
                        <li>Dietetics</li>
                        <li>Occupational therapy</li>
                        <li>Psychology</li>
                        <li>Radiography</li>
                    </ul>
                    <h3>Chemistry</h3>
                    <p>The following careers need a good grade in chemistry:</p>
                    <ul>
                        <li>Systems analysis</li>
                        <li>Biochemistry</li>
                        <li>Biomedical sciences</li>
                        <li>Biotechnology</li>
                        <li>Chemical engineering</li>
                        <li>Chemistry</li>
                        <li>Civil engineering</li>
                        <li>Dentistry</li>
                        <li>Dietetics</li>
                        <li>Medicine</li>
                        <li>Food science and technology</li>
                        <li>Geology</li>
                        <li>Health service management</li>
                        <li>Mechanical engineering</li>
                        <li>Metallurgy</li>
                        <li>Pharmacy</li>
                        <li>High school chemistry teaching</li>
                        <li>Veterinary medicine</li>
                        <li>Forensic chemistry</li>
                        <li>Agricultural sciences</li>
                        <li>Soil science</li>
                        <li>Laboratory technology</li>
                        <li>Medical technology</li>
                        <li>Environmental health</li>
                    </ul>
                </div>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="career_myths">
                    Some false beliefs on careers you should ignore
                </h2>
                <div class="w3-container">
                    <quote>"It is never too late to be what you might have been." - George
                        Eliot</quote>
                    <p>
                        Allan, a young man had just completed Form Four. His heart was in
                        music but his father, a religious leader, would hear none of it. He
                        persuaded him to pursue an education course in university.
                        Reluctantly, Allan joined. He did not invite his parents for
                        graduation. Armed with a Bachelor of Education degree, Allan
                        confronted his father with a resolve that had been building up over
                        the four wasted years. “This certificate is all you wanted and you
                        can have it. I am going out now to pursue my career in music!”
                    </p>
                    <p>
                        He found his dream career as a composer and singer. Later he formed
                        a successful brand. Allan’s father believed that a career in
                        education is better paying than one in music. If you are not
                        careful, you can fall into some false beliefs or myths about careers
                        like Allan’s father. There are many incompetent career advisers who
                        can easily mislead students on their career paths by spreading
                        falsehoods or myths. Some of the common myths include:
                    </p>
                    <h3>Myth 1: Some jobs make people rich and others make them poor.</h3>
                    <p>
                        Don’t listen to the many ignorant people who see life in terms of
                        profit and loss. A career helps you to develop your skills, talents
                        and self-fulfillment in a special way that benefits society. It is
                        only incidental that you make money in the process. Often, a job
                        well done attracts good rewards but you cannot start with rewards
                        before doing a job.
                    </p>
                    <h3>Myth 2: There are “men’s jobs” and “women’s jobs”.</h3>
                    <p>
                        Ignore such outdated thoughts and simply follow your interests when
                        choosing your career. There is no scientific evidence to show that
                        men and women are not equal to all careers. In fact, some women
                        excel in law, medicine, architecture and other jobs alongside men.
                        Equally, some men do well as nurses and receptionists where some of
                        these jobs were traditionally considered to be women’s careers
                    </p>
                    <h3>
                        Myth 3: Some careers run in families and there is nothing you can do
                        about it.
                    </h3>
                    <p>
                        Perhaps nobody seeks career guidance or ventures out in such
                        families. But you don’t have to be held back by the family career if
                        your interests are elsewhere. Indeed, if you train in a different
                        career you may bring in some skills that the family needs to
                        prosper.
                    </p>
                    <h3>Myth 4: My parents know the career that is best for me.</h3>
                    <p>
                        This is not always so. Sometimes your parents can be wrong. Expect
                        some opposition to your career choice and learn to show everybody
                        your point of view. You are the one who will live with the career
                        anyway!
                    </p>
                    <h3>
                        Myth 5: You can make more money as a lawyer, doctor, architect or a
                        tour guide than in any other Job.
                    </h3>
                    <p>
                        Remember the definition of a career is a job that makes you grow in
                        an important way!. Just pursue your dream and riches are merely
                        incidental. Strictly speaking, you get paid for the value that you
                        add to people’s lives through your career. In any case, a career is
                        about self-fulfillment first and money later.
                    </p>
                </div>
                <div class="w3-container">
                    <h3>
                        Myth 6: Teaching and nursing are not as good as other careers.
                    </h3>
                    <p>
                        Well, some people get into jobs which are the envy of every-body but
                        they don’t do much there. Others get into careers that may not be so
                        socially visible and they redefine these jobs by setting new
                        standards. Florence Nightingale and former Tanzanian President
                        Mwalimu Julius Nyerere were a nurse and a teacher respectively who
                        made their way into history by excelling in their careers. Whether
                        you join nursing or teaching or whichever career, what matters is
                        the zeal that you take to such jobs and the new heights you will
                        scale in personal development.
                    </p>
                    <h3>
                        Myth 7: Going into the entertainment industry is a waste of time.
                    </h3>
                    <p>
                        Don’t take such comments seriously. The new generation of east
                        African rappers, some of whom boast university degrees are among the
                        highest paid. The advent of many FM radio and television stations in
                        the East African region has greatly opened up the field for those
                        who want to join the entertainment industry.
                    </p>
                    <h3>
                        Myth 8: Higher education and career training are useless nowadays.
                    </h3>
                    <p>
                        The fact that there is a high rate of unemployment should not
                        discourage you. First arm yourself with some training and explore
                        the opportunities even beyond our borders. You can never benefit
                        from an opportunity without the right papers.
                    </p>
                    <h3>
                        Myth 9: Some courses are merely for filing up vacancies and are not
                        marketable at all.
                    </h3>
                    <p>
                        All institutions of higher learning regularly review their training
                        programmes to keep them in line with the job market. It would defeat
                        the purpose of a college or university to train people who have no
                        prospects of getting jobs or creating opportunities to earn a
                        living.. There is no useless course if you have the passion for it.
                    </p>
                    <h3>
                        Myth 10: Getting into business is better than pursuing a career.
                    </h3>
                    <p>
                        You can pursue business even better after getting a career than
                        engaging in it straight from school. Besides, when you have trained
                        for a job you can make better decisions and have a bigger network of
                        contacts to do business with. You can also acquire skills and
                        attitudes that enhance your business.
                    </p>
                    <h3>
                        Myth 11: Graduates of certain universities are given priority during
                        employment than others with similar qualifications from other
                        universities.
                    </h3>
                    <p>
                        All universities teach the same number of units for similar degree
                        programmes. Therefore, when it comes to employment the university
                        you attended does not matter so long as you have completed and
                        passed in all the prescribed units for a particular degree.
                    </p>
                </div>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="career_goals_reality">
                    How to Turn your career goals into reality
                </h2>
                <div class="w3-container">
                    <quote>"You only live once, but if you do it right, once is enough." - Mae
                        West
                    </quote>
                    <p>
                        With a clear focus, you can turn your career goals into reality.
                        This will bring happiness and fulfillment into your life. For almost
                        everyone, living a meaningful life is an ongoing process. It is very
                        easy to live life by going through the motions without actually
                        living fully. Far too many young people are getting up every day
                        with no passion or purpose in what they want to become. They have
                        lost track of their life goals and are not sure how to get back to
                        the path towards living a fulfilled life. But you can do the
                        following to remain on course
                    </p>
                    <h3>Turn your goals into habits</h3>
                    <p>
                        If your goal is to get some college education then make it a habit.
                        Make education a part of your everyday life by always learning and
                        doing something towards that objective. For example, you can seek
                        all the information you need about your dream institution and the
                        courses offered. Habits help us to achieve our goals by transforming
                        small steps into larger ones. For instance, if you have achieved
                        your goal of accumulating Kshs 1,000 in three months, expand this
                        goal by making it a monthly habit! Work even harder and within one
                        year you will have saved Kshs 12,000!
                    </p>
                    <h3>Break your goals into smaller parts</h3>
                    <p>
                        In order to make your goals achievable, break them down into smaller
                        steps and celebrate each step as you achieve it. For example,
                        writing a 300 page novel many look like a daunting task until you
                        break it down. When you have the plot sketched out, you can decide
                        to write at least one page every day and the novel will be over in
                        less than one year! Alter-natively if you only type two pages
                        everyday, you will accomplish the task in only 150 days, which is
                        slightly less than six months!
                    </p>
                </div>
                <div class="w3-container">
                    <h3>Watch out for the negative thoughts</h3>
                    <p>
                        Do you limit yourself by listening to old, outdated and just plain
                        wrong advice? When for example people tell you that you can’t do a
                        bachelor of commerce course because you haven’t done accounting
                        first, just smile and tell them: “Thanks, but I think I will still
                        do it!” In life people are always more apt to listen to those who
                        want to spread negative emotions and thoughts than they are likely
                        to pay attention to those who want to spread around the message of
                        “Yes you can!” Learn how to overcome negativity. You can start by
                        keeping away from people who spread old and outdated beliefs.Bill
                        Gates, founder of Microsoft, did not believe in the old belief at
                        the time that IBM should not do business with small companies. And
                        look at where Microsoft is today! James Mwangi, the CEO of Equity
                        Bank, avoided the traditional beliefs which were common and which
                        had it that ordinary people did not have the capacity to do business
                        with banks. He opted to go for them. And look at where he has
                        propelled Equity Bank today.
                    </p>
                    <h3>Keep your mind open to changes</h3>
                    <p>
                        Always have an open mind for changes that are happening around us.
                        This should enable you to modify your desires or goals. For example,
                        the Kenya Universities and Colleges Central Placement Service
                        (KUCCPS) have put the undergraduate and diploma application
                        procedure fully online. Other institutions of higher learning have
                        also done so. In fact, even ordinary job applications are now
                        online. So, change by seeking computer training so that you can
                        navigate the cyberspace. You can use the long holiday and after
                        completing secondary school to make an overhaul of your character.
                        Set lifelong goals and map out the way of achieving them. Be
                        sensible and self-driven without having to wait for instructions all
                        the time. Seek a temporary job and learn how to manage your own
                        affairs. This is also the time for learning and practicing the
                        fundamentals that cut across all careers like honesty, hard work and
                        good interpersonal relationships. If you do this, everybody will
                        notice the change in your attitude and outlook. Before you know
                        it,you will be living a completely new life. You will also be a
                        catalyst for others to find fulfillment in their lives as well!
                    </p>
                </div>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="time_management">
                    The best Time management tips
                </h2>
                <div class="w3-container">
                    <quote>"Time is money" - Benjamin Franklin</quote>
                    <p>
                        To complete your course and unlock the infinite potential that it
                        holds for you, time management is crucial. But many young people
                        have not mastered the art of managing their time. In some extreme
                        cases, some youths get into acts of indiscipline when there is
                        nothing scheduled to occupy them in school and college. While the
                        extent to which our youth are inclined to acts of indiscipline at
                        every free moment is debatable, one thing is certain. That some of
                        them are caught up in two alternating and contradicting ends of a
                        scale. On one end, there is nothing to do and they are bored by
                        idleness and at the other end there isn’t enough time for what they
                        genuinely enjoy doing! That is, they are poor time managers. And
                        time mismanagement can derail you from your career path. But it is a
                        skill that is not only important in one’s studies, but in life as
                        well and you can learn it. This is how:
                    </p>
                    <h3>Realize that a day has 24 hours</h3>
                    <p>
                        No matter how organized we are, there are always only 24 hours in a
                        day. Time does not change. All we can actually manage is ourselves
                        and what we do with the time that we have. Find out where you are
                        wasting time Many of us fall prey to time-wasters that steal time we
                        could be using much more productively. What are your time wasting
                        activities? Do you spend too much time surfing the Internet, reading
                        email, or making personal calls? Do you always require several hours
                        to bathe and dress before you are ready to leave your home? The
                        first step to effective time management is to pin point where you
                        lose it and change.
                    </p>
                    <h3>Create time management goals</h3>
                    <p>
                        Remember, the focus of time management is actually changing your
                        behaviour, not changing time. A good starting point is by
                        eliminating your personal time wasters. For example, set a goal that
                        you are not going to take personal phone calls until you are done
                        with a particular task.
                    </p>
                </div>
                <div class="w3-container">
                    <h3>Prioritize</h3>
                    <p>
                        Start each day with a time management session by prioritizing the
                        tasks for the day and setting your performance benchmark. If you
                        have twenty tasks for a given day, how many of them do you truly
                        need to accomplish? So set the order in which you are going to
                        tackle them
                    </p>
                    <h3>Learn to delegate</h3>
                    <p>
                        No matter how small your task is, there is no need for you to be a
                        one-person show. For effective time management, you need to let
                        other people carry some of the load. For example, your sisters and
                        brothers can help you keep house or take care of the animals so that
                        you are free to attend computer or driving lessons on time
                    </p>
                    <h3>Set time limits for all tasks.</h3>
                    <p>
                        For instance, reading and answering emails and chatting with your
                        social media friends can consume your whole day if you let it. And
                        you cannot prepare for classes the whole morning up to 11 o’clock!
                        Instead, set a limit of one hour a day for chatting with you social
                        media friends and stick to other things for the rest of the day.
                    </p>
                    <h3>Be organized</h3>
                    <p>
                        Are you wasting a lot of time looking for clothes and personal
                        effects every day? Some young men especially take pride in the
                        disorder in their rooms and how they can never get anything quickly.
                        But this is a seed that grows into time wastage. They are likely to
                        approach life this way, mixed up and never finding anything easily.
                    </p>
                    <h3>Don’t waste time waiting</h3>
                    <p>
                        We all have to wait for some people or things sometimes. For
                        example, we always queue up for our turn at supermarkets, offices
                        and doctor’s rooms. But you don’t have to just sit there all day!
                        Always take something to do with you, such as a book to read, a
                        notebook to scribble your thoughts, a laptop to catch up on your
                        assignments or a smart phone to answer your emails
                    </p>
                </div>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="part_time_jobs">
                    The most important skills to master that employers look for
                </h2>
                <div class="w3-container">
                    <quote>"Never say anything about yourself you do not want to come true."
                        –Brian Tracy</quote>
                    <p>
                        Having some work experience from internship on the Curriculum Vitae
                        (CV) of fresh graduates is a good way of searching for a job. This
                        can result in more job offers as compared to individuals who lack
                        such work experience. Besides work experience, many employers
                        nowadays seek people with certain “soft skills” that make them
                        employable such as the capacity to work well with other people. When
                        you work part time during college holidays, you increase your
                        network of friends in a particular industry or profession. This
                        gives you a head start in job hunting when you are through with
                        college. Some of the areas where many youths try their hands in part
                        time jobs include:
                    </p>
                    <ul>
                        <li>Teaching.</li>
                        <li>Hospitality industry</li>
                        <li>Agriculture</li>
                        <li>Construction industry</li>
                    </ul>
                    <p>
                        Working part time successfully develops an individual’s skills which
                        are desired by companies in the real world of work. This is
                        regardless of the fact whether or not you will eventually come back
                        to that line of work. Besides some experience in a part time job,
                        most employers look for certain skills and personality traits that
                        are desired in all careers. You can develop them while in college as
                        you pursue your professional training. These skills and character
                        traits include:
                    </p>
                </div>
                <div class="w3-container">
                    <li>Computer literacy</li>
                    <li>Presentation skills, both written and oral</li>
                    <li>Intelligence</li>
                    <li>Self confidence</li>
                    <li>Willingness to accept responsibility</li>
                    <li>Initiative, can you bring new ideas and suggestions?</li>
                    <li>Interpersonal skills, can you get along with other people?</li>
                    <li>Ability to handle conflict.</li>
                    <li>Honesty</li>
                    <li>Organization</li>
                    <li>Ambition</li>
                    <li>Persuasiveness</li>
                    <li>Willingness to work hard and without supervision</li>
                    <p>
                        From the foregoing, your career journey is long. It will take time
                        and many amendments and reconsiderations as you develop all these
                        skills
                    </p>
                    <h3>Highlights</h3>
                    <li>
                        Working semi-skilled jobs before going to college is a good way of
                        earning and also getting into careers.
                    </li>
                    <li>
                        Always get your supervisor or boss to write you a recommendation
                        letter for every small part time job you do; such letters can sway a
                        job in your favour during an interview.
                    </li>
                </div>
            </div>
            <div class="w3-container w3-row">
                <h2 class="w3-topbar w3-bottombar w3-border-green" id="earn_respect">
                    The best way to earn respect
                </h2>
                <div class="w3-container">
                    <quote>"Respect for ourselves guides our morals, respect for others guides
                        our manners." - Laurence Sterne</quote>
                    <p>
                        Some young people are sometimes accused of complaining a lot. They
                        are often impatient because they see the world differently from the
                        older people. With this generational difference, young people may
                        nor earn respect. But you can change all this and make people
                        respect you. Respect cuts both ways with the people you interact
                        with whether or not they are senior or junior to you. As a young
                        person, this is how you can earn respect:
                    </p>
                    <h3>Be good at what you do</h3>
                    <p>
                        In every field of work, the most highly regarded people are those
                        who are the best at what they do. Everyone loves competent people,
                        especially those who present their best work all the time.
                    </p>
                    <h3>Respect others</h3>
                    <p>
                        Respect is two ways. If you want others to respect you, you have to
                        respect them as well.
                    </p>
                    <h3>Honour your word</h3>
                    <p>
                        No one likes a dishonest or an unreliable person. A well respected
                        individual is one who is honest and fulfills his or her promises.
                        Integrity is the first step to being respected.
                    </p>
                    <h3>Be open to criticisms</h3>
                    <p>
                        Contrary to popular belief, being respected does not mean you won’t
                        receive criticism. In fact, it is quite the opposite. The more
                        people know you, the more criticisms you will receive. Learn to
                        handle criticisms gracefully. People respect someone who is able to
                        handle negative feedback.
                    </p>
                    <h3>Respect yourself to be respected</h3>
                    <p>
                        Some youths complain that they are not respected yet they don’t even
                        respect themselves. Stop criticizing yourself unnecessarily and
                        learn to love yourself wholly and unconditionally. If you don’t
                        respect yourself, you cannot hope to get respect from others.
                    </p>
                </div>
                <div class="w3-container">
                    <h3>Conduct yourself professionally</h3>
                    <p>
                        This includes dressing well, being well-mannered, using appropriate
                        language and having some social etiquette.
                    </p>
                    <h3>Don’t say bad things about others</h3>
                    <p>
                        Whether it is in class, a workplace or in a family setup, it is not
                        appropriate to bad mouth other people. You cannot earn respect this
                        way. If you are unhappy with a certain individual, talk to him or
                        her and say what is annoying you. Don’t talk behind his or her back
                        as some youths do by texting their friends or even posting it on the
                        Social Media.
                    </p>
                    <h3>Stand up for what you believe in.</h3>
                    <p>
                        Have you ever come across young people who simply agree with
                        whatever others say without much thought? After some time, people
                        come to actually hate those who say yes to everything. You get
                        respected by having your own opinion and a mind of your own.
                        Practice standing up for what you believe in, but of course in a
                        polite and firm way.
                    </p>
                    <h3>Be yourself</h3>
                    <p>
                        Many people, both old and young, try too hard to be other people
                        that they are not and end up with no sense of identity. Discover who
                        you are and what you stand for. The careers world needs people who
                        are true to themselves, not clones of each other.Be a role model to
                        others Do you uphold yourself to the highest code of conduct? When
                        you do so, you will gain respect. The most respected person is the
                        one who inspires others by his or her good actions and conduct.
                    </p>
                    <h3>Highlights.</h3>
                    <ul>
                        <li>
                            To be respected, do your best at the job you were hired to do.
                        </li>
                        <li>
                            Respect those who are at higher and lower job levels than you.
                        </li>
                        <li>
                            Staying away from gossip is often a hallmark of many respectable
                            people.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {% include 'homeapp/footer.php' %}

</body>

</html>