<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css">

    <link rel="icon" href="https://icon-library.com/images/downloader-icon/downloader-icon-23.jpg" type="image/jpeg" sizes="16x16">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>3D2Y-VideoDownloader</title>
</head>

<body>
    <script type="text/babel">
        function Secret(){
                return(
                    <div className="accordion position-fixed top-25 start-20" style={{ background: 'transparent', border: 'none', cursor:'default' }} id="accordionPanelsStayOpen1"><br/><br/>
                        <div className="accordion-item" style={{ background: 'transparent', border: 'none' }}>
                            <a className="accordion-header">
                                <button className="opacity-75 position-fixed top-3 end-0 mt-5 me-3 p-100" style={{ background: 'transparent', fontfamily: 'Arial Black', border:'none', fontsize: '10px', cursor:'default' }} type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne1" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne1">
                                    <i className="bi bi-emoji-wink"></i>
                                </button>
                            </a>
                            <div id="panelsStayOpen-collapseOne1" className="accordion-collapse collapse p-4 p-md-5 rounded-3" style={{ background: 'transparent' }}>
                                <div className="accordion-body" style={{ background: 'transparent', textalign: 'center', cursor:'default' }}>
                                    HA! YOU FOUND THE SECRET!
                                    <i className="bi bi-bug-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                );
        }
        ReactDOM.render(<Secret/> , document.getElementById("Secret"));

        function VideoBox(){

            return(
                <div className="card my-4 text-white" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none'}}>
                    <h1 style={{ fontsize: '60px', color: '#003475'}}><i className='bi bi-tv'></i></h1>
                    <div className="card-body" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none' }}>
                        <h5 className="card-title fs-3 fw-bold" style={{ cursor:'default', color: '#003475'}}>Series</h5>
                        <video className="x1lliihq x5yr21d xh8yej3" preload="none" src="blob:https://www.instagram.com/bc79fe1d-a06f-4444-91b4-064d78ececa9" ></video>
                    </div>
                </div>
            )
        }

        function DownloadCall(Title){

            console.log(Title);
            ReactDOM.render(<VideoBox/> , document.getElementById("box2"));
            return null;
        }

            function HomePage(){
                return(
                    <div>
                        <div id="HomeName"><a><b>3D</b>2Y</a></div>

                        <div className="container my-4 text-center">
                            <div className="row col-lg-12 col-xs-1 gx-3 text-center justify-content-center">
                                <div className="col-sm-4 col-lg-4 rounded-4" id="box1">
                                    <div className="card my-4 text-white" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none'}}>
                                        <div className="card-body" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none' }}>
                                            <div className="card-title fs-3 fw-bold input-group mx-3">
                                                <i className="card-title fs-3 fw-bold bi bi-link p-2" style={{ cursor:'default', color: '#003475'}}></i>
                                                <input className="card-title fs-3 fw-bold form-control mx-3" placeholder="Link" style={{ cursor:'default', background:'rgba(210, 230, 250, 0)', border:'none', color: '#003475', width:'200px' }} onChange={function Call(event){DownloadCall(event.target.value)}}/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="row col-lg-12 col-xs-1 gx-3 text-center justify-content-center">
                                <div className="col-sm-4 col-lg-4 rounded-4" id="box2">
                                </div>
                            </div>
                        </div>
                    </div>
                );
            }
            function HomePageCall(){
                ReactDOM.render(<HomePage/> , document.getElementById("AppHere"));
                return null;
            }
            
            ReactDOM.render(<HomePageCall/> , document.getElementById("AppHere"));

        function Header(){
        return(
        <div className="container-fluids">
            <nav className="navbar navbar-expand-md navbar-dark fixed-top" style={{ background: 'rgba(0, 0, 10, 0.8)', cursor:'default' }}>
                &nbsp;&nbsp;&nbsp;
                <a href="index.php" style={{cursor:'default'}}><img src="https://icon-library.com/images/downloader-icon/downloader-icon-23.jpg" id="AaroophanIMG" height="35px" width="35px" className="rounded-5" /></a>
                &nbsp;&nbsp;&nbsp;
                <a className="navbar-brand fw-bold font-arial" id="PageNameA" href="index.php" style={{ cursor:'default', color:'rgba(210, 230, 250, 0.9)' }}>3D2Y-VideoDownloader</a>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle" style={{ cursor:'default', border:'none' }}>
                    <span className="navbar-toggler-icon"></span>
                </button>
                &nbsp;&nbsp;&nbsp;
                <div className="collapse navbar-collapse" id="navbarNav">
                    <ul className="navbar-nav">
                        <li className="nav-item">
                            <a className="nav-link p-2 mx-3" style={{ cursor:'default' }}><i className="bi bi-house"></i></a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link p-2 mx-3" style={{ cursor:'default', color:'rgba(210, 230, 250, 0.02)' }}>Aaroophan-3D2Y-VideoDownloader</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        );
        }
        ReactDOM.render(<Header /> , document.getElementById("HeaderHere"));

        function Footer(){
        return(
        <footer className="footer text-light py-5 bottom" style={{ background: 'linear-gradient(to bottom, transparent 0%, #111111 100%)' }}>
            <div className="container">
                <br />
                <hr /><br />
                <div className="text-center">
                    <a href="http://aaroophan-com.stackstaging.com" style={{ cursor:'default', color:'rgba(210, 230, 250, 0.9)', textDecoration:'none' }}>&copy; 2023 Aaroophan</a>
                    <br /><br />
                    <ul className="list-inline">
                        <li className="list-inline-item"><a href="https://www.instagram.com/aaroophan/?theme=dark" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-instagram"></i></a></li>
                        <li className="list-inline-item"><a href="https://twitter.com/Aaroophan" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-twitter"></i></a></li>
                        <li className="list-inline-item"><a href="https://www.linkedin.com/in/aaroophan" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-linkedin"></i></a></li>
                        <li className="list-inline-item"><a href="https://github.com/R-U-Fun" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        );
        }
        ReactDOM.render(<Footer /> , document.getElementById("FooterHere"));
    </script>
    <style>
        body {
            background: linear-gradient(to top, #003475 0%, #EDF5FF 100%);
            font-family: 'Segoe', 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';
        }

        nav,
        footer {
            font-family: 'Segoe', 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'
        }

        #HomeName {
            width: 100%;
            margin: auto;
            padding: 10px 0;
            text-align: center;
            font-size: 50px;
            font-family: 'Lato', sans-serif;
            letter-spacing: 2px;
        }

        #HomeName a {
            color: #003475;
            text-decoration: none;
            position: relative;
            cursor: default;
            transition: font-size 1s, letter-spacing 1s;
        }

        #HomeName a:hover {
            font-size: 75px;
            letter-spacing: 20px;
        }

        #box1,
        #box2 {
            transition: box-shadow .2s;
        }

        #box1:hover,
        #box2:hover {
            box-shadow: 1px 1px 15px 10px #003475;
        }

        #PageNameA {
            font-family: 'Lato', sans-serif;
            text-decoration: none;
            transition: color 1s, font-size 1s;
        }

        #PageNameA:hover {
            color: #99D9EA;
            cursor: default;
            font-size: 23px;
        }
    </style>

    <div id="Secret"></div>

    <div id="HeaderHere" class="container"></div>

    <br><br>

    <div class="p-4" id="AppHere">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <br><br>

    <div id="FooterHere"></div>

</body>

</html>