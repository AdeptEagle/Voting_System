<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meet Your Candidates</title>
  <link rel="stylesheet" href="{{asset('Css/candidates.css')}}"> 
</head>
<body>
<div class="sidebar hidden">
        <div class="sidebar h2">
            <nav class="main-menu">
                <ul>
                    <li>
                        <a href="{{ route('Voting.Home') }}">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="has-subnav">
                        <a href="{{ route('Voting.Candidates') }}">
                            <i class="fa fa-camera-retro fa-2x"></i>
                            <span class="nav-text">
                                SSC Candidates  
                            </span>
                        </a>
                    </li>
                    <li class="has-subnav">
                        <a href="{{ route('voting.index') }}">
                            <i class="fa fa-box-archive fa-2x"></i>
                            <span class="nav-text">
                                Election Voting
                            </span>
                        </a>
                    </li>
                    <li class="has-subnav">
                        <a href="Results.html">
                            <i class="fa fa-chart-simple fa-2x"></i>
                            <span class="nav-text">
                                Election Results 
                            </span>
                        </a>
                    </li>  
                </ul>
                
                <ul class="logout">
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-light fa-user fa-2x"></i>
                            <span class="nav-text">
                                Logout
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
<div class="scroll-container">
    <div class="card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="{{asset('CandidateImages/GalleryIm1.jpg')}}" alt="Image 1">
        </div>
        <div class="flip-card-back">
          <h2>President: That Girl</h2>
          <p>Course: placeholder</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus ratione ullam dicta exercitationem laudantium dolores dolorum natus, dolorem, officiis cum, explicabo earum delectus reprehenderit tempore? Sapiente officiis ratione quas nesciunt!</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cum cumque animi nulla voluptatum deleniti, repudiandae repellendus sunt, commodi tempore explicabo, mollitia molestiae alias aperiam rerum ducimus recusandae consequuntur optio.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="{{asset('CandidateImages/GalleryIm2.jpg')}}" alt="Image 2">
        </div>
        <div class="flip-card-back">
          <h2>President: That Guy</h2>
          <p>Course: placeholder</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus ratione ullam dicta exercitationem laudantium dolores dolorum natus, dolorem, officiis cum, explicabo earum delectus reprehenderit tempore? Sapiente officiis ratione quas nesciunt!</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cum cumque animi nulla voluptatum deleniti, repudiandae repellendus sunt, commodi tempore explicabo, mollitia molestiae alias aperiam rerum ducimus recusandae consequuntur optio.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="{{asset('CandidateImages/GalleryIm3.jpg')}}"alt="Image 3">
        </div>
        <div class="flip-card-back">
          <h2>Vice- President: That Girl</h2>
          <p>Course: placeholder</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus ratione ullam dicta exercitationem laudantium dolores dolorum natus, dolorem, officiis cum, explicabo earum delectus reprehenderit tempore? Sapiente officiis ratione quas nesciunt!</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cum cumque animi nulla voluptatum deleniti, repudiandae repellendus sunt, commodi tempore explicabo, mollitia molestiae alias aperiam rerum ducimus recusandae consequuntur optio.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="{{asset('CandidateImages/GalleryIm4.jpg')}}" alt="Image 4">
        </div>
        <div class="flip-card-back">
          <h2>Vice-President: That Guy</h2>
          <p>Course: placeholder</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus ratione ullam dicta exercitationem laudantium dolores dolorum natus, dolorem, officiis cum, explicabo earum delectus reprehenderit tempore? Sapiente officiis ratione quas nesciunt!</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cum cumque animi nulla voluptatum deleniti, repudiandae repellendus sunt, commodi tempore explicabo, mollitia molestiae alias aperiam rerum ducimus recusandae consequuntur optio.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="{{asset('CandidateImages/GalleryIm5.jpg')}}" alt="Image 5">
        </div>
        <div class="flip-card-back">
          <h2>Secretary: That Girl</h2>
          <p>Course: placeholder</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus ratione ullam dicta exercitationem laudantium dolores dolorum natus, dolorem, officiis cum, explicabo earum delectus reprehenderit tempore? Sapiente officiis ratione quas nesciunt!</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cum cumque animi nulla voluptatum deleniti, repudiandae repellendus sunt, commodi tempore explicabo, mollitia molestiae alias aperiam rerum ducimus recusandae consequuntur optio.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="{{asset('CandidateImages/GalleryIm6.jpg')}}"alt="Image 6">
        </div>
        <div class="flip-card-back">
          <h2>Secretary: That Guy</h2>
          <p>Course: placeholder</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus ratione ullam dicta exercitationem laudantium dolores dolorum natus, dolorem, officiis cum, explicabo earum delectus reprehenderit tempore? Sapiente officiis ratione quas nesciunt!</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cum cumque animi nulla voluptatum deleniti, repudiandae repellendus sunt, commodi tempore explicabo, mollitia molestiae alias aperiam rerum ducimus recusandae consequuntur optio.</p>
        </div>
      </div>
    </div>

   
</div>

    <!-- Add more cards as needed, up to 12 -->
  </div>

  <script src="https://kit.fontawesome.com/b70fc1673e.js" crossorigin="anonymous"></script>
</body>
</html>