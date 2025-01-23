<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
		integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css"> 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
	<title>Document</title>
</head>

<body style="background-color:rgb(255, 255, 255);">
	<div class="body">
	<header>
 <!--------------------------------------------------------- NAVIGATION BAR ------------------------------------------------------------->
	<nav class="navigation  ">
		<div class="name"><a href="#">EASY LEARN</a></div>
		<ul class="links">
			<li><a href="home" class="h text-decoration-none">HOME</a></li>
			<li><a href="about" class="a">ABOUT</a></li>
			<li><a href="contact" class="c">CONTACT US</a></li>
			<li><a href="package" class="p">PACKAGES</a></li>
		</ul>
		<a href="" class="action_btn">REGISTER</a>
		<div class="search_btn"><i class="fa-solid fa-magnifying-glass"></i></div>
		<div class="toggle_btn"><i class="fa-solid fa-bars"></i></div>
	</nav>
	<div class="drop">
		<li><a href="home" class="h">HOME</a></li>
		<li><a href="about" class="a">ABOUT</a></li>
		<li><a href="contact" class="c">CONTACT US</a></li>
		<li><a href="package" class="p">PACKAGES</a></li>
		<li><a href="" class="action_btn ">REGISTER</a></li>
	</div>
	</header>
	<!------------------------------------------------------- carousel ---------------------------------------------------------------------->
	<div class="control">
	<div class="slider">
		<span style="--i:1;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbK0UqnLPO-Ml9_JF8Eq_BA6Rx-rOlCe4yeA&s" alt=""></span>
		<span style="--i:2;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvKNgZpjF6ZNCyj1ClA_D_p3B7m71HyHMRmQ&s" alt=""></span>
		<span style="--i:3;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnkgVVTtYXNXuVJITYs5h6iUXhhrWjA76cSQ&s" alt=""></span>
		<span style="--i:4;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDfQHkpyuu9KyLuz971dD_u5wqfmGpdnZfEA&s" alt=""></span>
		<span style="--i:5;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8Je6raLPg5jWmUvstyxLu1AbKXDFm7j0d2Q&s" alt=""></span>
		<span style="--i:6;"><img src="https://i.pinimg.com/736x/70/85/a4/7085a4e10fca016c9897b97b8e14b0a1.jpg" alt=""></span>
		<span style="--i:7;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvStsN7Q3Y9AxYli0dE0pQiYam36I3Z39tzg&s" alt=""></span>
		<span style="--i:8;"><img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Mckvie_logo1.jpg" alt=""></span>
	</div>
	</div>

<!------------------------------------------------------- carousel  end---------------------------------------------------------------------->





<!-- <nav>
        <div class="main-nav container flex">
            <a href="#" onclick="reload()" class="company-logo">
                <img src="./assets/logo.png" alt="company logo">
            </a>
            <div class="nav-links">
                <ul class="flex">
                    <li class="hover-link nav-item" id="ipl" onclick="onNavItemClick('ipl')">IPL</li>
                    <li class="hover-link nav-item" id="finance" onclick="onNavItemClick('finance')">Finance</li>
                    <li class="hover-link nav-item" id="politics" onclick="onNavItemClick('politics')">Politics</li>
                </ul>
            </div>
            <div class="search-bar flex">
                <input id="search-text" type="text" class="news-input" placeholder="e.g. Science">
                <button id="search-button" class="search-button">Search</button>
            </div>
        </div>
    </nav> -->
    

 












<!------------------------------------------------------- state ,college, image  ---------------------------------------------------------------------->
<div class="container">
	<div class="box1">
		<form>
			<label for="states">States</label>
			<select id="states" >
				<option value="states">Select State</option>
				<option value="states">West Bengal</option>
				<!-- <option value="states">New Delhi</option>
				<option value="states">Mumbai</option>
				<option value="states">Chennai</option>
				<option value="states">Bangalore</option> -->

			</select>
			
			<label for="university" class="mt-4">University Syllabus</label>
	
		</form>
		<ol>
			<li><B> MAKAUT</B> </li>
			<li><B>JIS University</B></li>
			<li><B>JADAVPUR University </B></li>
			<li><B>University of Calcutta </B></li>
		</ol>

	</div>


	<div class="box1">
	
			<label for="states">RESOURSES</label>
			
			
			
	
		
		
			<div class="container flex border-bold "><li><a href="https://www.overleaf.com/"> 1. AI RESUME MAKER</li></a></div>
			<div class="container flex border-bold "><li><a href="	https://www.linkedin.com/feed/">2. SEARCH JOB</li></a></div>
			<div class="container flex border-bold"><li><a href="	https://www.linkedin.com/feed/">3. INTERVIEW PREP</a></li></div>
			<div class="container flex border-bold "><li><a href="	https://www.linkedin.com/feed/">4. APTITUDE TEST</li></a></div>
			
			
		

	</div>
	
		<!-- <p>Narula Institute of Technology </p> -->
		<!-- <main>
			<div class="cards-container container flex" id="cards-container">
				
			</div>
		</main> -->
		<!-- <div class="box2"> -->


		









<!-- 
			<div id="template-news-card">
				<div class="card-header">
					<img src="https://via.placeholder.com/400x200" alt="news-image" id="news-img">
				</div>
				<div class="card-content">
					<h3 id="news-title">This is the Title</h3>
					<h6 class="news-source" id="news-source">End Gadget 26/08/2023</h6>
					<p class="news-desc" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe quis voluptatum quisquam vitae doloremque facilis molestias quae ratione cumque!</p>
				</div>
			</div> -->
<!-- 			
			</div> -->
	
	
	<!-- <div class="box3">
		<button type="submit" value="See More">See More >></button>
	</div> -->
	
</div>


<?php
    require('db_config.php');
 
    ?>
<!-- contact us -->
<div class="container-fluid align-item-center justify-content-center contact-div w-75 rounded ">

	<div class="container-fluid ">
	
	

		<div class="my-5  px-4">
			<h2 class="w-bold h-font text-center text-dark mt-1">Contact Us</h2>
			<hr>
			<div class="h-Line bg-white"></div>
			
		</div>
	

	<div class="row w-100">
		<div class="col-lg-6 col-md-6 mt-1 px-3  mt-2  rounded h-25">

			<div class="bg-light rounded shadow mt-2 p-4 h-25">
				<iframe class="w-100 border-dark" height="180" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.942995602311!2d88.40217527530184!3d22.618603779459082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89e06cfaa32d1%3A0x64c6461b0e5573a8!2sDr.%20Sudhir%20Chandra%20Sur%20Institute%20of%20Technology%20%26%20Sports%20Complex!5e0!3m2!1sen!2sin!4v1726664409876!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<h6 class="text-dark mt-2">Address</h6><a href="#" target="_blank" class="d-inline-block text-decoration-none text-dark mb-3 rounded"></a>
				<i class="bi bi-geo-alt-fill text-dark"> </i>college
				</a>
				<h6 class="mt-4 text-dark">Call Us </h6>
				<a href="tel:" class="d-inline-block mb-2 text-decoration-none text-dark"> <i class="bi bi-telephone-fill m-2"></i>+4535454425</a>
				<br>
				<a href="mail to : " class="d-inline-block mb-2 text-decoration-none text-dark"> <i class="bi bi-envelope-fill m-2"> dgdghxhgh@gmail.com</i></a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 px-4  ">
			<div class="bg-light rounded shadow p-4  mt-2 mb-3 ">
				<form method="POST">
					<h6 class="text-dark">Send a message</h6>
					<div class="mt-1">
						<label class="form-label text-dark" style="font-weight:300;font-size: 15px;">Name</label>
						<input name="name" required type="text" class="form-control shadow-none area">
					</div>
					<div class="mt-1">
						<label class="form-label text-dark" style="font-weight:300;font-size: 15px">Email</label>
						<input  name="email" required type="email" class="form-control shadow-none area">
					</div>
					<div class="mt-1">
						<label class="form-label text-dark" style="font-weight:300;font-size: 15px">Subject</label>
						<input  name="subject" required type="text" class="form-control shadow-none area">
					</div>
					<div class="mt-1">
						<label class="form-label text-dark" style="font-weight:300;font-size: 15px">Message</label>
						<textarea  name="message" required class="form-control shadow-none area " rows="2" style="resize:none;"></textarea>
					</div>
					<button type="submit" name="send" class="btn btn-outline-dark  custom-bg mt-3">SEND</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

<?php

if(isset($_POST['send']))
{
	$frm_data = filteration($_POST);

	$q = "INSERT INTO `user_contact`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
	$values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

	$res = insert($q,$values,'ssss');
	if($res==1){
		alert('success','Mail sent!');
	}
	else{
		alert('error','Server Down! Try again later');
	}
}

?>


<div class="container-fluid align-item-center justify-content-center  ">

	<div class="container-fluid rounded mb-5 align-item-center justify-content-center p-3">
<section class="about" id="about">
	<div class="main-txt">
		<h1>About <span>Us</span></h1>
	</div>
	

		

		<div class="row" style="margin-top: 50px;">

			<div class="col-md-6 py-3 py-md-0">
				<div class="card-about rounded">
					<img src="college.jpg" alt="" height="280px">
				</div>
			</div>

			<div class="col-md-6 py-3 py-md-0">
				<h2>Short Description</h2>
				<p>A travel agency is a private retailer or public service that provides travel and tourism -related services to the general public on behalf of accommodation or travel suppliers to offer different kinds of travelling packages for each destination. Travel agencies can provide outdoor recreation, arranging logistics for luggage and medical items delivery for travellers upon request, public transport .</p>
				<button id="about-btn">Read More...</button>
			</div>
		</div>

	</div>
</section>
</div>
<div class="container flex justify-content-center align-item-center topnews">
<H1 class="justify-content-center align-item-center">Top News</H1>
</div>
<main>
        <div class="cards-container container flex h-25 col-lg-12 col-md-12" id="cards-container">
           
        </div>
    </main>
<div>
    <template id="template-news-card">
	<div class="card-deck">
        <div class="card" style="height: 5rem;">
            <div class="card-header">
                <img src="https://via.placeholder.com/400x200" alt="news-image" id="news-img">
            </div>
            <div class="card-content h-25">
                <h3 id="news-title">This is the Title</h3>
                <h6 class="news-source" id="news-source">End Gadget 26/08/2023</h6>
                <p class="news-desc " id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit.!</p>
            </div>
        </div>
    </template></div>

    <script src="script.js"></script>


<footer>
	<!-- <article>
	  <h2>Information</h2>
	  <button>
		<p>Sign up free</p>
		<span class="material-symbols-outlined"> trending_flat </span>
	  </button>
	</article> -->

	<section class="top">
	  <img src="https://raw.githubusercontent.com/frontend-joe/css-footers/da46d1947acfcfb6f2ad9ee5c69d642f93920923/footer-3/logo.svg" />
	  <ul>
		<li>
		  <h3>Resources</h3>
		  <a>Health&Safety</a>
		  <a>Job Oppertunity</a>
		  <a>Mobile App</a>
		  <a>Center</a>
		</li>
		<li>
		  <h3>Information For</h3>
		  <a>Prospective Students</a>
		  <a>Current Student</a>
		  <a>Faculty&Staff</a>
		  <a>Parents</a>
		  <a>Visitors</a>
		</li>
		<li>
		  <div class="social-media">
		  <h3>Social</h3>
		  <a href="https://www.Google.com">Google</a>
		  <a href="https://www.facebook.com">Facebook</a>
		  <a href="https://www.Linkedin.com">Linkedin</a>
		  <a href="https://www.instagram.com">Instagram</a> 
		</li>
		<li>
		  <h3>Company</h3>
		  <a>About Us</a>
		  <a>Blog</a>
		  <a>Partnerships</a>
		  <a>Careers</a>
		</li>
	  </ul>
	</section>
	<section class="bottom">© copyright</section>
  </footer>

</div>

<!-- footer start -->


<!-- chatbot -->
<button class="chatbot-toggler">
	<span class="material-symbols-outlined">mode_comment</span>
	<span class="material-symbols-outlined">close</span>
</button>
<div class="chatbot">
	<header>
		<h2 class="text-white">Chatbot</h2>
		<span class="close-btn material-symbols-outlined">close</span>
	</header>
	<ul class="chatbox">
		<li class="chat incoming">
			<span class="material-symbols-outlined">smart_toy</span>
			<p>Hi there 👋<br>How can I help you today?</p>
		</li>
	</ul>
	<div class="chat-input">
		<textarea placeholder="Enter a message" required></textarea>
		<span id="send-btn" class="material-symbols-rounded">send</span>
	</div>
</div>



</div>








<!-- script -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>

  <!-- Initialize Swiper -->
   

 

<!-- Initialize Swiper -->







  <script>
    var swiper = new Swiper(".mySwiper", {
      grabCursor: true,
      effect: "creative",
	  loop:true,
      creativeEffect: {
        prev: {
          shadow: true,
          translate: [0, 0, -400],
        },
        next: {
          translate: ["100%", 0, 0],
        },
      },
    });

	
  </script>
  <script>
	function alert(type,msg,position='body') {
       let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
       let element = document.createElement('div');
       element.innerHTML = `
       <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
           <strong class="me-3">${msg}</strong>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
       `;
       if(position=='body'){
         document.body.append(element); 
         element.classList.add('custom-alert');
       }
       else{
         document.getElementById(position).appendChild(element);
       }
       setTimeout(remAlert,3000);     
}

  </script>
	<script>



		const toggleBtn = document.querySelector('.toggle_btn')
		const toggleBtnIcon = document.querySelector('.toggle_btn i')
		const dropMenu = document.querySelector('.drop')
		toggleBtn.onclick = function(){
			dropMenu.classList.toggle('open')
			const isOpen = dropMenu.classList.contains('open')

			toggleBtnIcon.classList = isOpen
			? 'fa-solid fa-xmark'
			: 'fa-solid fa-bars'
		}
	</script>

<script>

	const chatbotCloseBtn = document.querySelector(".close-btn");
	const chatInput = document.querySelector(".chat-input textarea");
	const sendChatBtn = document.querySelector(".chat-input span");
	const chatBox = document.querySelector(".chatbox");
	const chatbotToggler = document.querySelector(".chatbot-toggler");
	let userMessage;
	const API_KEY = "ENTER YOUR API KEYS";
	const inputInitHeight = chatInput.scrollHeight;
	
	const createChatli = (message,className) =>{
		const chatLi = document.createElement("li");
		chatLi.classList.add("chat", className); 
		let chatContent = className === "outgoing" ? `<p></p>` : `<span class="material-symbols-outlined">smart_toy</span> <p></p>`;
		chatLi.innerHTML = chatContent;
		chatLi.querySelector("p").textContent = message;
		return chatLi;
	}
	
	const generateResponse = (incomingChatLi) => {
	  const API_URL = `https://generativelanguage.googleapis.com/v1/models/gemini-pro:generateContent?key=${API_KEY}`
		const messageElement = incomingChatLi.querySelector("p")
		const requestOptions = {
	  method: "POST",
	  headers: { "Content-Type": "application/json" },
	  body: JSON.stringify({ 
		contents: [{ 
		  role: "user", 
		  parts: [{ text: userMessage }] 
		}] 
	  }),
	};
	
		fetch(API_URL, requestOptions).then(res => res.json()).then(data=>{
			messageElement.textContent = data.candidates[0].content.parts[0].text; // Update message text with API response
		}).catch((error)=>{
			messageElement.classList.add("error");
			messageElement.textContent = "Oops! Something went wrong. Please try again."
		}).finally(() => chatBox.scrollTo(0,chatBox.scrollHeight));
	}
	
	const handelChat = () => {
		userMessage = chatInput.value.trim();
		if (!userMessage) return;
		chatInput.value = "";
		chatInput.style.height = `${inputInitHeight}px`
	
		chatBox.appendChild(createChatli(userMessage,"outgoing"));
		chatBox.scrollTo(0,chatBox.scrollHeight);
		setTimeout(()=>{
			const incomingChatLi = createChatli("Thinking...","incoming")
			chatBox.appendChild(incomingChatLi);
			chatBox.scrollTo(0,chatBox.scrollHeight);
			generateResponse(incomingChatLi);
		},600)
	}
	
	
	chatInput.addEventListener("input",(e)=>{
		chatInput.style.height = `${inputInitHeight}px`
		chatInput.style.height = `${chatInput.scrollHeight}px`
	})
	
	chatInput.addEventListener("keydown",(e)=>{
		if(e.key === "Enter" && !e.shiftKey && window.innerWidth > 800){
			e.preventDefault();
			handelChat();
		}
	})
	
	sendChatBtn.addEventListener("click", handelChat);
	chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));
	chatbotCloseBtn.addEventListener("click", () => document.body.classList.remove("show-chatbot"));
	
		</script>
		   
</body>

</html>
