/* style.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
}


header {
    background-color: #333;
    color: 0000;
    text-align: center;
    padding: 0.5rem;
    background:rgba(12, 12, 12, 0.3);
   
      /* Adjust to cover the entire header */
     /* Keeps the image fixed while scrolling */
    
}


form {
    max-width: 600px;
    margin: 0 auto;
    padding: 1rem;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(24, 5, 5, 0.1);
}

input, textarea {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #555;
}

#map {
    margin-top: 2rem;
    
}

 #bg-video {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Resize video to cover entire viewport */
    z-index: -1; /* Place video behind other content */
}

/* Set a green background with 30% opacity */
 #ad_bg{
    background: rgba(76, 175, 80, 0.3);
    display:inline;
}

#image
{
   display: flex; 
   height: 100px;
}


#head{
    text-align: center;
    margin: auto;

}
