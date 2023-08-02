<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="register.css" />
    <script src="register.js" defer></script>
    <title>Registraion Form</title>
  </head>
  <body>
    <h1>Application Form</h1>
    <form action="registerValidation.php" class="form" method="post">
      <h1 class="text-center">Registration Form</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title=" REGISTRATION FORM"
        ></div>
        <div class="progress-step" data-title="PERSONAL DETAILS"></div>
        <div class="progress-step" data-title=" QUALIFICATION DETAILS"></div>
        <div class="progress-step" data-title="AGREEMENT"></div>
        <div class="progress-step" data-title="UPLOAD DOCUMENTS"></div>
      </div>

      

      <!-- Steps -->
      <div class="form-step form-step-active">

        <!--INTRO FORM-->

        <div class="introForm">
          <h1><span id="year">2023</span></h1>
          <h1>APPLICATION</h1>
        </div>

        <div class="introForm">
          <h3>FOR TERTIARY APPLICATIONS ASSISTANCE</h3>
        </div>

        <div id="box_info">
          <h5>Required documents:</h5>
          <p>Application forms without all supporting documents will not be processed by Uni Help</p>
          <h5>All applicants are required to submit certified copies of the following:</h5>
          <ul>
            <li>Your South African ID document or an unbridged birth certificate / Passport of applicant.</li>
            <li>ID of parents and/or guardian Or a death certificate where applicable.</li>
            <li>Grade 11 final results / Grade 12 June results for applicants currently in Grade 12.</li>
            <li>School – end certificate for applicants who have completed Grade 12.</li>
            <li>Academic transcript for applicants transferring to another tertiary institution.</li>
            <li>Testimonial letter stating that you are upgrading/repeating Grade 12.</li>
          </ul>
        </div>

        <div class="introForm">
          <h4>CLOSING DATE 31 OCTOBER 2022</h1>
        </div>

        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>

      </div>

      <!--PERSONAL DETAILS-->

      <div class="form-step">
        <p class="section">Your personal details</p>
        <div class="input-group">
          <label for="fname" class="label">FIRST NAMES:</label>
          <input type="text" name="fname" class="input" id="fname" placeholder="in full, as per your ID document"/>
        </div>

        <div class="input-group">
          <label for="Sname" class="label">SURNAME:</label>
          <input type="text" name="lname" class="input" id="lname" placeholder="as per your ID document"/>
        </div>

        <div class="input-group">
          <label for="email" class="label">EMAIL:</label>
          <input type="email" name="email" class="input" id="email" placeholder="example@gmail.com"/>
        </div>


        <div>
          <table>
            <tr>
              <td><label for="id_number" class="label">ID NUMBER :</label></td>
            </tr>

            <tr>
              <td><input type="number" name="id_pass_number" class="inputWidth input" id="id_pass_number"/></td>
            </tr>
          </table>
        </div>

        <div>

                <!--Creating three columns-->
                <div class="row">
                  <div class="column">
                    <table>

                      <tr>
                        <label for="title">TITLE:</label>
                        <select name="title" id="title">
                        <option value="SELECT" selected>SELECT</option>
                        <option value="MR">MR</option>
                        <option value="MISS">MISS</option>
                        <option value="MRS">MRS</option>
                        <option value="OTHERS">OTHERS</option>
                        </select>

                      </tr>
                  
                    </table>
                  </div>

                  <div class="column">
                    <table>
                      <tr>
                        <label for="gender">GENDER :</label>
                        
                      </tr>
                      

                      <tr>
                            <select name="gender" id="gender">
                            <option value="SELECT" selected>SELECT</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                      </tr>

                    </table>
                  </div>

                  <div class="column">
                    <table>

                      <tr>
                      <label for="race">RACE:</label>

                        <select name="race" id="race">
                        <option value="SELECT" selected>SELECT</option>
                        <option value="African">African</option>
                        <option value="Colored">Colored</option>
                        <option value="Indian">Indian</option>
                        <option value="White">White</option>
                        <option value="Other">Other</option>
                        </select>
                      </tr>
                      
                    </table>
                  </div>
                </div>
                
                
                
              </td>
            </tr>
          </table>
        </div>
   

        <div>
          <table>
            <tr>
              <td><label for="province">PROVINCE :</label></td>
              <td><label for="nationality">NATIONALITY :</label></td>
            </tr>

            <tr class="inputWidth">
              <td><input type="text" name="province" class="inputWidth input" id="province"/></td>
              <td><input type="text" name="nationality" class="inputWidth input" id="nationality"/></td>
            </tr>
          </table>
        </div>
        

        <div>
          
          
          <table>

            <tr>
              <th style="text-align: left;"><label for="address" class="label">RESIDENTIAL ADDRESS :</label></th>
              
            </tr>

            <tr>
              <td><textarea name="address" rows="10" cols="80"></textarea></td>
            </tr>

          </table>
        </div>


        <div>
          <table>
            <tr>
              <td><label for="disability" class="label">DO YOU HAVE A DISABILITY :</label></td>
              <td><label for="marital_status" class="label">MARITAL STATUS :</label></td>
              <td><label for="language" class="label">HOME LANGUAGE :</label></td>
            </tr>

            <tr>
              <td>
                <table class="data_table radio">
                  

                  <tr>
                        <select name="disability" id="disability">
                        <option value="SELECT" selected>SELECT</option>
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                        </select>
                  </tr>
                </table>
              </td>
              <td>
              <select name="marital_status" id="marital_status">
              <option value="SELECT" selected>SELECT</option>
              <option value="SINGLE">SINGLE</option>
              <option value="MARRIED">MARRIED</option>
            </select>
              </td>
              <td>
              <select name="language" id="language">
              <option value="SELECT" selected>SELECT</option>
              <option value="AFRIKAANS">AFRIKAANS</option>
              <option value="SOUTHERN SOTHO">SOUTHERN SOTHO</option>
              <option value="TSONGA">TSONGA</option>
              <option value="ENGLISH">ENGLISH</option>
              <option value="VENDA">VENDA</option>
              <option value="SWATI">SWATI</option>
              <option value="XHOSA">XHOSA</option>
              <option value="TSWANA">TSWANA</option>
              <option value="NDEBELE">NDEBELE</option>
              <option value="ZULU">ZULU</option>
              <option value="NORTHERN SOTHO">NORTHERN SOTHO</option>
            </select>
              </td>
            </tr>

            

          </table>
        </div>

        <p class="section">Guardian / Family Details</p>
        
        <div class="input-group">
          <label for="pname" class="label">FIRST NAMES:</label>
          <input type="text" name="pname" class="input" id="pname" placeholder="in full, as per your ID document" />
        </div>

        <div class="input-group">
          <label for="PSname" class="label">SURNAME:</label>
          <input type="text" name="PSname" class="input" id="PSname" placeholder="as per your ID document"/>
        </div>


        <div>
          <table>
            <tr>
              
              
              <td><label for="P_ID_number" class="label">ID NUMBER :</label></td>
              <td><label for="P_title" class="label">TITLE :</label></td>
              <td><label for="genderP" class="label">GENDER:</label></td>
            </tr>

            <tr>
              
              <td><input type="number" name="P_ID_number" class="inputWidth input" id="P_ID_number"/></td>
              <td>
                        <select name="p_title" id="p_title">
                        <option value="SELECT" selected>SELECT</option>
                        <option value="MR">MR</option>
                        <option value="MISS">MISS</option>
                        <option value="MRS">MRS</option>
                        <option value="OTHERS">OTHERS</option></select></td>
              <td>
                  
                <select name="p_gender" id="p_gender">
                    <option value="SELECT" selected>SELECT</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
              </td>
             
            </td>
            </tr>

            

          </table>
        </div>


        <div>
          <table>
            <tr>

              <td><label for="cellNo" class="label">MOBILE NUMBER :</label></td>
              <td><label for="AltCellNo" class="label">ALTERNATIVE NUMBER :</label></td>
            </tr>

            <tr>
              
              <td><input type="text" name="cellNo" class="inputWidth input" id="cellNo"/></td>
              <td><input type="text" name="AltCellNo" class="inputWidth input" id="AltCellNo"/></td>
            </tr>

          </table>
        </div>

        <div class="chooseParent">
          <label for="role">ROLE:</label><br>
          <select name="role" id="role">
          <option value="SELECT" selected>SELECT</option>
          <option value="MOTHER">MOTHER</option>
          <option value="FATHER">FATHER</option>
          <option value="GUARDIAN">GUARDIAN</option> </select>
        </div>
        
        


        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>

      <!--QUALIFICATION DETAILS SECTION-->

      <div class="form-step">
        <p class="section">Applicant’s education details</p>

        <div>

        <h3>TERTIARY STUDIES:</h3>

        <select name="studies" id="studies">
        <option value="SELECT" selected>SELECT</option>
        <option value="FULL TIME TERTIARY STUDIES">FULL TIME TERTIARY STUDIES</option>
        <option value="PART-TIME TERTIARY STUDIES">PART-TIME TERTIARY STUDIES</option>
        </select>
          
        </div>

        <div class="input-group">

          <h3>NAME OF SCHOOL ATTENDED</h3>
          <input type="text" class="input" name="schoolName" id="schoolName" />
        </div>


        <div class="">
          
          <h3>FINAL YEAR:</h3>
          <input type="text" class="input" id="year" name="year">

          <h3>TYPE OF CERTIFICATE </h3>
          
          <select name="certificate" id="certificate">
          <option value="SELECT" selected>SELECT</option>
          <option value="Currently in grade 12">Currently in grade 12</option>
          <option value="NSC Admission Bachelor">NSC Admission Bachelor</option>
          <option value="NSC Admission none">NSC Admission none</option>
          <option value="NSC Admission Certificate">NSC Admission Certificate</option>
          <option value="NSC Admission Diploma">NSC Admission Diploma</option>
          </select>

          
        </div>


        <h3>HIGHEST GRADE PASSED </h3>

        <div class="">

        <select name="gradePassed" id="gradePassed">
        <option value="SELECT" selected>SELECT</option>
        <option value="GRADE 11">GRADE 11</option>
        <option value="GRADE 12">GRADE 12</option>
        <option value="NCV">NCV</option>
        </select>
          
        </div>
        
        <div>
          
        </div>

        <h3>ARE YOU CURRENTLY UPGRADING / REPEATING YOUR MATRIC? </h3>

        <div class="radio">
          <label for="matricStatus">Yes</label></td>
          <input type="radio" id="matricStatus" name="matricStatus" value="YES">
          <label for="matricStatus">No</label></td>
          <input type="radio" id="matricStatus" name="matricStatus" value="NO">
        </div>

        <p>If yes, attach testimonial letter stating that you are upgrading / repeating matric.</p>

        <h3>THE TYPE OF ADMISSION:</h3>
      
          <select name="admission" id="admission">
          <option value="SELECT" selected>SELECT</option>
          <option value="Undergraduate">UNDERGRADUATE</option>
          <option value="Postgraduate">POSTGRADUATE</option>
          </select>

        <br>
        <hr>
        <br>
        

        <div>
        <h1 style="text-align:center;">THE UNIVERSITY LIST</h1>
        <br>
          <table class="Uni_table">
            <tr>
              <th class="th">UNIVERSITIES IN SOUTH AFRICA</th>
              <th class="th">UNIVERSITIES IN SOUTH AFRICA</th>
            </tr>

            <tr>
              <td>
                <label for="Uni" >University of Pretoria (up)</label>
              </td>

              <td>
                <label for="Uni" >University of Johannesburg (uj)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >University of Limpopo (ul)</label>
              </td>

              <td>
                <label for="Uni" >University of Zululand (uzulu) </label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >University of the Free State (ufs) </label>
              </td>

              <td>
                <label for="Uni" >Sol Plaatjie University (spu)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >Nelson Mandela University (nmu)</label>
              </td>

              <td>
                <label for="Uni" >University of Fort Hare (ufh)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >University of Mpumalanga (ump) </label>
              </td>

              <td>
                <label for="Uni" >Walter Sisulu University (wsu)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >North West University (nwu)</label>
              </td>

              <td>
                <label for="Uni" >Durban University of Technology (Dut)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >University of Cape Town (uct)</label>
              </td>

              <td>
                <label for="Uni" >University of South Africa (unisa)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >University of Venda (univen)</label>
              </td>

              <td>
                <label for="Uni" >University of the Western Cape (uwc)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >University of Kwazulu Natal (ukzn)</label>
              </td>

              <td>
                <label for="Uni" >University of Witwatersrand (wits)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >Cape Penisula University of Technology (cput)</label>
              </td>

              <td>
                <label for="Uni" >Central University of Technology (cut)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >Mangosuthu University of Technology (mut)</label>
              </td>

              <td>
                <label for="Uni" >Vaal University of Technology (vut)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >Mangosuthu University of Technology (mut)</label>
              </td>

              <td>
                <label for="Uni" >Vaal University of Technology (vut)</label>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Uni" >Tshwane University of Technology (tut)</label>
              </td>

            </tr>

          </table>
        </div>
        <div>
       <br>
        <hr>
        <br>

        <h3 style="text-align:center;color:orange;">WRITE FOUR UNIVERSITIES OF YOUR CHOICE</h3>
        <br>

        <label for="uniChoice1" class="label">First Choice :</label>
        <input type="text" class="input" name="uniChoice1" id="uniChoice1" />
        <label for="opyion2" class="label">Second Choice :</label>
        <input type="text" class="input" name="uniChoice2" id="uniChoice2">
        <label for="opyion3" class="label">Third Choice :</label>
        <input type="text" class="input" name="uniChoice3" id="uniChoice3">
        <label for="opyion3" class="label">Fourth Choice :</label>
        <input type="text" class="input" name="uniChoice4" id="uniChoice4">
        </div>

        <br>
        <hr>
        <br>

        <h3 style="text-align:center;">WRITE THE FIRST THREE CHOICE(S) / COURSE(S) OF STUDY YOU PREFER IN ALL UNIVERSITIES</h3>
        <br>

        <label for="option1" class="label">First Choice :</label>
        <input type="text" class="input" name="option1" id="option1" />
        <label for="option2" class="label">Second Choice :</label>
        <input type="text" class="input" name="option2" id="option2">
        <label for="option3" class="label">Third Choice :</label>
        <input type="text" class="input" name="option3" id="option3">
        <label for="option4" class="label">Fourth Choice :</label>
        <input type="text" class="input" name="option4" id="option4">


        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>


      <!--UPLOAD DOCUMENTS SECTION-->

      <div class="form-step">

        <div class="paragraph">

          <h4 class="section">ANNEXTURE A</h4>
          <p><span class="brown">DECLARATION</span></p>
          <p><span class="brown">Please read this carefully before accepting</span></p>
          <p>I, the applicant, hereby:</p>

          <ol>
            <li>The information provided is true and correct and that I have read and understood the terms and conditions.</li>
            <li>I confirm that I have read and understood the terms and conditions set out in this form by signing.</li>
            <li>I permit Uni Help to apply for any available sponsors and institutions.</li>
            <li>I accept full responsibility for the payment of all application fees and residence fees determined by the
              institution.</li>
            <li>Acknowledge that I am submitting this application freely and voluntarily. If I am a minor, I confirm that my
              legal guardian/
              Parent is fully aware and supportive of my application to the Uni Help</li>
            <li>I am fully aware that the Uni help is under no obligation to admit/ accept student within various
              institutions, acceptance of the applicant will be determined by the institution(s) based on academic merit. </li>
            <span class="red"><li>I permit the Uni Help to consider other courses related to my choices of study within various
              institutions.</li></span>
            <li>I understand that meeting the minimum admission requirements is no guarantee for admission. The Universities
                has other considerations, e.g. academic merit, quotas for academic programmes, equity, etc.</li>
          </ol>

        </div>

        <p>I accept the terms above
          <div class="radio">
            <label for="terms">Yes</label>
            <input type="radio" id="terms" name="terms" value="YES">
            <label for="terms">No</label>
            <input type="radio" id="terms" name="terms" value="NO">
          </div>
          
        </p>
        
        <h4 class="section">ANNEXTURE B</h4>

        <div class="paragraph">
          <p>If you once applied within various institutions, please provide us with your previous log in details
            (Student No & Pins) of all institution for Re – admission. Failure to provide us with the details no
            re-admissions will be administrated.</p>
        </div>

        <div class="row2">
          <div class="column2">
            <ol>
              <li>
                <div>
                  <p class="paragraph">Example :</p>
                  <p class="paragraph">Name of University: University of Limpopo </p>
                  <label for="StudentNo">Student No :</label>
                  <input type="text"  value="2 2 0 0 5 8 6 8 4" disabled><br>
                  <label for="Pin">Pin :</label>
                  <input type="text" value="9 8 2 3 5" disabled>
                </div>
              </li>
                
              <li>
                <br><br>
                <div>
                  <label for="nameOfUni">Name of University :</label>
                  <input type="text" name="nameOfUni" id="nameOfUni"><br>
                  <label for="StudentNo">Student No :</label>
                  <input type="text" name="StudentNo" id="StudentNo"><br>
                  <label for="Pin">Pin :</label>
                  <input type="text" name="Pin" id="Pin">
    
                </div>
              </li>

              <li>
                <br><br>
                <div>
                  <label for="nameOfUni">Name of University :</label>
                  <input type="text" name="nameOfUni" id="nameOfUni"><br>
                  <label for="StudentNo">Student No :</label>
                  <input type="text" name="StudentNo" id="StudentNo"><br>
                  <label for="Pin">Pin :</label>
                  <input type="text" name="Pin" id="Pin">
    
                </div>
              </li>

            </ol>
            

            
            
          </div>
          <div class="column2">
            <ol start = "4">
              <li>
                <div>
                  <label for="nameOfUni">Name of University :</label>
                  <input type="text" name="nameOfUni" id="nameOfUni"><br>
                  <label for="StudentNo">Student No :</label>
                  <input type="text" name="StudentNo" id="StudentNo"><br>
                  <label for="Pin">Pin :</label>
                  <input type="text" name="Pin" id="Pin">
    
                </div>
              </li>

            </ol>
            
          </div>
        </div>
        

        
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>

      <!--UPLOAD DOCUMENTS-->

      <div class="form-step">
        <h3 class="section">Upload Your Documents</h3>
        
        
        

        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <input type="submit" value="Submit" name="Submit" class="btn" id="Submit" />
        </div>
      </div>
    </form>

  </body>
</html>