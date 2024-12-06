<?php 
// Start the 
session session_start(); 
// Check if the user is logged in 
if (!isset($_COOKIE['user'])) { header("Location: index.html"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayu Dwi Istiyanto - Portfolio</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .button {
        --bezier: cubic-bezier(0.22, 0.61, 0.36, 1);
        --edge-light: hsla(0, 0%, 50%, 0.8);
        --text-light: rgba(255, 255, 255, 0.4);
        --back-color: 240, 40%;

        cursor: pointer;
        padding: 0.7em 1em;
        border-radius: 0.5em;
        min-height: 2.4em;
        min-width: 3em;
        display: flex;
        align-items: center;
        gap: 0.5em;

        font-size: 18px;
        letter-spacing: 0.05em;
        line-height: 1;
        font-weight: bold;

        color: hsla(0, 0%, 90%);
        border: 0;
        box-shadow: inset 0.4px 1px 4px var(--edge-light);

        transition: all 0.1s var(--bezier);
        }

.button:hover {
  --edge-light: hsla(0, 0%, 50%, 1);
  text-shadow: 0px 0px 10px var(--text-light);
  box-shadow: inset 0.4px 1px 4px var(--edge-light),
    2px 4px 8px hsla(0, 0%, 0%, 0.295);
  transform: scale(1.1);
}

.button:active {
  --text-light: rgba(255, 255, 255, 1);

  background: linear-gradient(
    140deg,
    hsla(var(--back-color), 50%, 1) min(2em, 20%),
    hsla(var(--back-color), 50%, 0.6) min(8em, 100%)
  );
  box-shadow: inset 0.4px 1px 8px var(--edge-light),
    0px 0px 8px hsla(var(--back-color), 50%, 0.6);
  text-shadow: 0px 0px 20px var(--text-light);
  color: hsla(0, 0%, 100%, 1);
  letter-spacing: 0.1em;
  transform: scale(1);
}

input[type="radio"]:checked + label {
  background-color: whitesmoke;
  color: #CCE0AC;
}

    </style>
</head>
<body style="background-color: #FF8A8A; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <div class="container mx-auto px-2 py-8">
        <div class="z-10 flex justify-end fixed right-11 gap-3">
            <div>
                <input data-target="#about-section" type="radio" id="about" name="nav" class="hidden">
                    <label for="about" class="p-5 flex flex-col items-center justify-center w-20 rounded-md text-pink-400 bg-gray-100 cursor-pointer">
                        <i class="fas fa-user"></i>
                          About
                    </label>
            </div>
            <div>
                <input data-target="#resume-section" type="radio" id="resume" name="nav" class="hidden">
                    <label for="resume" class="p-5 flex flex-col items-center justify-center w-20 rounded-md text-pink-400 bg-gray-100 cursor-pointer">
                        <i class="fas fa-user-graduate"></i>
                        Education
                    </label>
            </div>
            <div>
                <input data-target="#works-section" type="radio" id="works" name="nav" class="hidden">
                    <label for="works"class="p-5 flex flex-col items-center justify-center w-20 rounded-md text-pink-400 bg-gray-100 cursor-pointer"> 
                        <i class="fas fa-suitcase"></i>
                        Experience
                    </label>
            </div>
            <div>
                <input data-target="#contact-section" type="radio" id="contact" name="nav" class="hidden">
                    <label for="contact" class="p-5 flex flex-col items-center justify-center w-20 rounded-md text-pink-400 bg-gray-100 cursor-pointer">
                        <i class="fas fa-laptop-code"></i>
                         Project
                    </label>
            </div>
          </div>
          <div class="flex flex-row w-full mt-20" style="height: 1000px;">
            <div class="w-1/4 left-11 fixed">
                <div class="py-24 shadow-xl mt-5 shadow-indigo-400 rounded-xl grid place-items-center" style="height: 450px; background-color: #FFF4EA;">
                <img src="img/profile.png" class="absolute -top-16 rounded-lg h-40 object-cover">
                <h2 class="text-2xl font-bold" style="color: #CCE0AC;">Bayu Dwi Istiyanto</h2>
                <p class="text-gray-400">Website/Mobile Developer</p>
                <div class="mt-4 flex justify-evenly w-44">
                    <a href="#" class="bg-blue-400 hover:bg-blue-300 text-white rounded-full p-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="bg-blue-300 hover:bg-blue-200 text-white rounded-full p-2">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="bg-pink-500 hover:bg-pink-400 text-white rounded-full p-2">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="bg-blue-700 hover:bg-blue-600 text-white rounded-full p-2">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <div class="mt-8 grid place-items-center">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-phone-alt text-gray-600"></i>
                        <p class="text-gray-400">+62 87850431453</p>
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-envelope text-gray-600"></i>
                        <p class="text-gray-400">bayudwiistiyanto@gmail.com</p>
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-map-marker-alt text-gray-600"></i>
                        <p class="text-gray-400">Purwodadi, Indonesia</p>
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-calendar-alt text-gray-600"></i>
                        <p class="text-gray-400">Sep 21, 1996</p>
                    </div>
                </div>
                <button class="button mt-4" style="background-color: #F4DEB3;"><p style="color: whitesmoke;">Download CV</p></button>
                <p><a href="logout.php">Logout</a></p>
            </div>
            </div>
            <div class="mt-5 z-0 w-4/6 absolute right-11 shadow-xl shadow-indigo-400 rounded-xl p-8" style="background-color: #FFF4EA;">
                <section id="about-section">
                    <h2 class="text-3xl font-bold" style="color: #CCE0AC;">About</h2>
                    <p class="text-gray-400 text-justify">
                        I am a graduate of Bachelor of Education in Computer and Information Technology with experience as a Website Developer  and have completed my final project as a team leader in web application development. I understand the basics of web programming such as HTML, CSS, JavaScript, and PHP, and have experience using frameworks such as Laravel, Angular, Flutter, Ms .NET, And also Oracle database.
                    </p>
                    <p class="text-gray-400 text-justify">
                        I am also familiar with Git version control system and have the ability to work in a team and complete projects on time. This is proven by the portfolio attached.
                    </p>
                      
                    
                </section>
                <section id="resume-section" class="mt-10">
                    <h2 class="text-3xl font-bold" style="color: #CCE0AC;">Education</h2>
                    <div class="flex items-center space-x-4">
                    <div class="w-10 h-10">
                      <img src="img/unnes.png" alt="Unnes Logo" class="rounded-lg object-cover w-full">
                    </div>
                    <div class="w-full">
                        <p class="text-gray-400 mt-4"><span>UNIVERSITAS NEGERI SEMARANG</span><span class="text-gray-300 mt-4 italic">(Semarang State University)</span> <span class="text-sm">2015 - 2022</span></p>
                        <p class="text-gray-400 mt-1 text-sm">Bachelor of Informatics and Computer Engineering Education - GPA 3.26</p>
                    </div>
                  </div>
                  
                </section>
                <section id="works-section" class="mt-10">
                    <h2 class="text-3xl font-bold" style="color: #CCE0AC;">Experience</h2>
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10">
                          <img src="img/7smart.png" alt="Unnes Logo" class="rounded-lg object-cover w-full">
                        </div>
                        <div class="w-full">
                            <p class="text-gray-400 mt-4"><span>CV.Seven Smart Indonesia</span><span class="text-gray-300 mt-4 italic">(Boyolali)</span> <span class="text-sm">Feb 2023 - Mar 2023</span></p>
                            <p class="text-gray-400 mt-1 text-sm">I am tasked with creating the appearance of the application page according to the design provided using the Flutter framework.</p>
                        </div>
                      </div>
                      <div class="flex items-center space-x-4">
                        <div class="w-10 h-10">
                          <img src="img/pk.jpg" alt="Unnes Logo" class="rounded-lg object-cover w-full">
                        </div>
                        <div class="w-full">
                            <p class="text-gray-400 mt-4"><span>Pungkook Indonesia One</span><span class="text-gray-300 mt-4 italic">(Grobogan)</span> <span class="text-sm">Jun 2023 - Now</span></p>
                            <p class="text-gray-400 mt-1 text-sm">I am in charge of supervising and fixing bugs in a warehouse management system in a company, this system is also integrated with other systems for supplier payments and also Indonesian customs, therefore I must be careful in every step I take on it.
                                The technologies used in the system include:
                                kotlin, angular, Microsoft .NET, linQ, and Oracle database.</p>
                        </div>
                      </div>
                </section>
                <section id="contact-section" class="mt-10">
                    <h2 class="text-3xl font-bold" style="color: #CCE0AC;">Project</h2>
                
                </section>
            </div>
          </div>
    </div>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit-id.js" crossorigin="anonymous"></script>
    <script>
        document.querySelectorAll('input[name="nav"]').forEach(input => {
            input.addEventListener('change', function() {
                const target = document.querySelector(this.dataset.target);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>