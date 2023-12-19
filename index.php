<html lang = "en">  
   <head>  
      <meta charset = "utf-8">  
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">  
      <link rel = "stylesheet"   
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  
         integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"   
         crossorigin = "anonymous">         
      <title> Bootstrap 4 Registration Form Example </title>  
      <style>  
      body {  
      color: green;  
      }  
      </style>  
   </head>  
   <body>  
      <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve other form fields in a similar manner
  
  // Compose email message
  $to = "satishreddyhelpdesk@gmail.com"; // Replace with your email address
  $subject = "New Student Registration";
  $message = "test"; // Add other fields to the message

  // Send email
  $headers = "From: satishreddyhelpdesk@gmail.com"; // Replace with your email or leave it empty
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Email sending failed!";
  }
}
?>

<section class="h-100 bg-dark">  
  <div class="container py-5 h-100">  
    <div class="row d-flex justify-content-center align-items-center h-100">  
      <div class="col">  
        <div class="card card-registration my-4">  
          <div class="row g-0">  
            <div class="col-xl-6 d-none d-xl-block">  
              <img  
                src="https://img.freepik.com/free-photo/happy-young-female-student-holding-notebooks-from-courses-smiling-camera-standing-spring-clothes-against-blue-background_1258-70161.jpg?size=626&ext=jpg&ga=GA1.1.1546980028.1702857600&semt=sph"  
                alt="Sample photo"  
                class="img-fluid"  
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"  
              />  
            </div>  
            <div class="col-xl-6">  
              <div class="card-body p-md-5 text-black">  
                <h3 class="mb-5 text-uppercase"> Student registration form </h3> 
                 <form method="post">
                <div class="row">  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" />  
                      <label class="form-label" for="form3Example1m"> First name </label>  
                    </div>  
                  </div>  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" />  
                      <label class="form-label" for="form3Example1n"> Last name </label>  
                    </div>  
                  </div>  
                </div>  
                <div class="row">  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1m1" class="form-control form-control-lg" />  
                      <label class="form-label" for="form3Example1m1"> Mother's name </label>  
                    </div>  
                  </div>  
                  <div class="col-md-6 mb-4">  
                    <div class="form-outline">  
                      <input type="text" id="form3Example1n1" class="form-control form-control-lg" />  
                      <label class="form-label" for="form3Example1n1"> Father's name </label>  
                    </div>  
                  </div>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example8" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example8"> Address </label>  
                </div>  
                  <div class="form-outline mb-4">  
                  <input type="text" id="form3Example8" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example8"> Phone Number </label>  
                </div>  
                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">  
                  <h6 class="mb-0 me-4"> Gender: </h6>  
                  <div class="form-check form-check-inline mb-0 me-4">  
                    <input  
                      class="form-check-input"  
                      type="radio"  
                      name="inlineRadioOptions"  
                      id="femaleGender"  
                      value="option1"  
                    />  
                    <label class="form-check-label" for="femaleGender"> Female </label>  
                  </div>  
                  <div class="form-check form-check-inline mb-0 me-4">  
                    <input  
                      class="form-check-input"  
                      type="radio"  
                      name="inlineRadioOptions"  
                      id="maleGender"  
                      value="option2"  
                    />  
                    <label class="form-check-label" for="maleGender"> Male </label>  
                  </div>  
                  <div class="form-check form-check-inline mb-0">  
                    <input  
                      class="form-check-input"  
                      type="radio"  
                      name="inlineRadioOptions"  
                      id="otherGender"  
                      value="option3"  
                    />  
                    <label class="form-check-label" for="otherGender"> Other </label>  
                  </div>  
                </div>  
                <div class="row">  
                  <div class="col-md-6 mb-4">  
                    <select class="select">  
                      <option value="1"> State </option>  
                      <option value="2"> Panjab </option>  
                      <option value="3"> Bihar </option>  
                      <option value="4"> Uttar Pradesh </option>  
                    </select>  
                  </div>  
                  <div class="col-md-6 mb-4">  
                    <select class="select">  
                      <option value="1"> City </option>  
                      <option value="2"> Ludhiana </option>  
                      <option value="3"> Lucknow </option>  
                      <option value="4"> Patna </option>  
                    </select>  
                  </div>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example9" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example9"> Date of Birth </label>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example90" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example90"> Pincode </label>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example99" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example99"> Course </label>  
                </div>  
                <div class="form-outline mb-4">  
                  <input type="text" id="form3Example97" class="form-control form-control-lg" />  
                  <label class="form-label" for="form3Example97"> Email ID </label>  
                </div>  
                <div class="d-flex justify-content-end pt-3">  
                  <button type="button" class="btn btn-light btn-lg"> Reset all </button>  
                  <button type="submit" class="btn btn-warning btn-lg ms-2"> Submit form </button>  
                </div>
                </form>    
              </div>  
            </div>  
          </div>  
        </div>  
      </div>  
    </div>  
  </div>  
</section>  
</body>  
</html>  
