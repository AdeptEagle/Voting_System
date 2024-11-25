<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Council Voting Campaign</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('Css/Home.css')}}">
</head>
<body>
    <div id="header-carousel" class="carousel slide header-box" data-ride="carousel"data-interval="4000">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
                <li data-target="#header-carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('Images/Slide1.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First Slide</h5>
                        <p>Welcome.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('Images/Slide2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('Images/Slide3.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('Images/Slide4.jpg')}}" alt="Fourth slide">
                    <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
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
                    <li>
                        <a href="Voting.html">
                            <i class="fa fa-box-archive fa-2x"></i>
                            <span class="nav-text">
                                Election Vote
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
    <div class="container">
        <div class="campaign-info">
            <h2>Welcome to the Student Council Voting Campaign!</h2>
            <p>We are excited to present our candidates for the Student Council elections. This is your chance to make a difference in our school community. Meet the candidates, learn about their platforms, and make your voice heard!</p>
            
            <div class="event-list">
                <h3>Upcoming Events</h3>
                <ul>
                    <li><strong>Campaign Rally:</strong> September 25, 2024, 3:00 PM in the Auditorium</li>
                    <li><strong>Candidate Q&A:</strong> September 28, 2024, 1:00 PM in the Library</li>
                    <li><strong>Election Day:</strong> October 1, 2024, All Day</li>
                </ul>
            </div>
        </div>
        
        <div class="vote-info">
            <h2>How to Vote</h2>
            <p>Voting is easy! Simply follow these steps:</p>
            <ol>
                <li>Log in to the voting portal using your student ID.</li>
                <li>Select Election Voting In the Side bar</li>
                <li>Select your preferred candidates for each position.</li>
                <li>Submit your vote before the deadline.</li>
            </ol>
            <p>Your vote counts! Make sure to participate and help shape our student council.</p>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/b70fc1673e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
