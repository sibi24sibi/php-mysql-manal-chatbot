<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="bot-windows">
        <div class="bot-window-materail">

            <div class="profile d-flex">

                <div class="profile-pic p-2 bd-highlight"> 
                    <img src="https://cdn.statusqueen.com/dpimages/thumbnail/anime_boy_dp-2331.jpg" alt="" srcset=""> 
                </div>
                <div class="profile-name align-self-center">
                    Jack
                </div>

                <div class="window-option ml-auto align-self-center">
                    <button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-earphone" style="color:aliceblue" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-paperclip" style="color:aliceblue" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-option-vertical" style="color:aliceblue" aria-hidden="true"></span>
                    </button>
                </div>
                
            </div>
        </div>

             <div class="container  chat-screen ">

                

                

                <div id="body align-items-start">
                
                        <div class="userSection">
                        <div class="messages user-message">
        
                        </div>
                        <div class="seperator"></div>
                        </div>  
                        <div class="botSection">
                        <div class="messages bot-reply">
        
                        </div>
                        <div class="seperator"></div>
                        </div>                
                </div>


                <div class="bottom-tools d-flex al ">
                    
                        <button type="button" class="btn btn-default align-self-center " aria-label="Left Align">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                            </svg>
                        </button>
                        <input type="search" id="userInput" class="send-box mr-auto p-2 align-self-center" placeholder="" aria-label="Search" aria-describedby="search-addon"  name="messages"/>
                    
                    <button type="button" class="camera align-self-center p-2 bd-highlight" aria-label="Left Align">
                        <span class="glyphicon glyphicon-camera" style="color:black" aria-hidden="true"></span>
                    </button>
                    <button id="send" class="send-button align-self-center send ml-auto p-2 bd-highlight" aria-label="Left Align">
                        <span class="glyphicon glyphicon-send" style="color:white" aria-hidden="true"></span>
                    </button>
                </div>
                
            </div>
            
        
    </div>


      <script type="text/javascript">
      
      document.querySelector("#send").addEventListener("click", async () => {
        let xhr = new XMLHttpRequest();
        var userMessage = document.querySelector("#userInput").value

        let userHtml = '<div class="userSection">'+'<div class="messages user-message">'+userMessage+'</div>'+
        '<div class="seperator"></div>'+'</div>'

        document.querySelector('#body').innerHTML+= userHtml;

        xhr.open("POST", "query.php");
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send(`messageValue=${userMessage}`);

        xhr.onload = function () {
            let botHtml = '<div class="botSection">'+'<div class="messages bot-reply">'+this.responseText+'</div>'+
            '<div class="seperator"></div>'+'</div>'
            
            document.querySelector('#body').innerHTML+= botHtml;
        }

      })
      
    </script>

  </body>
  </html>