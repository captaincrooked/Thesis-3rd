<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Sk Profiling Registration Form</title>
</head>
<body>
    <header>
        <h1>Sk Profiling Registration Form</h1>
    </header>
    <div class="container">
        <form action="../registration/php/create.php" method="post">
            <div class="form-group">
                <br />
                <mnark>
                    <?php
                        if (isset($_GET['ms'])){
                            echo $_GET['ms'];
                        }
                    ?>
                </mnark>
                <br />
                <h4><label for="surname">Input your Name</label></h4>
                <input id="surname" type="text" name="surname" placeholder="Last name">
                <input id="firstName" type="text" name="firstName" placeholder="First name">
                <input id="middleName" type="text" name="middleName" placeholder="Middle name">
                <input id="suffixName" type="text" name="suffixName" placeholder="Suffix name">
            </div>
            <div class="form-group">
                <h4><label>Gender</label></h4>
                <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
            </div>
            <div class="form-group">
                <h4><label>Age</label> </h4>
                <input type="radio" id="child" name="age" value="child"><label for="child">15-18 (Child)</label>
                <input type="radio" id="young" name="age" value="young"><label for="young">19-25 (Young)</label>
                <input type="radio" id="adult" name="age" value="adult"><label for="adult">26-30 (Adult)</label>
            </div>
            <div class="form-group">
                <h4><label>Birthday</label></h4>
                <input type="date" id="birthdate" name="birthdate">
            </div>
           
            <div class="form-group">
                <h4><label for="statu">CIVIL STATUS</label></h4>
                <input type="radio" id="single" name="statu" value="single">Single
                <input type="radio" id="married" name="statu" value="married">Married
                <input type="radio" id="widowed" name="statu" value="widowed">Widowed
                <input type="radio" id="divorce" name="statu" value="divorce">Divorce
                <input type="radio" id="separated" name="statu" value="separated">Separated 
                <input type="radio" id="annulled" name="statu" value="annulled">Annulled       
                <input type="radio" id="unknown" name="statu" value="unknown">Unknown
                <input type="radio" id="live-in" name="statu" value="live-in">Live-in
            </div>
            <div class="form-group">
                <h4><label for="classification">Youth classification</label></h4>
                <input type="radio" id="inSchool" name="classification" value="inSchool">In school Youth
                <input type="radio" id="outOfSchool" name="classification" value="outOfSchool">Out of School Youth
                <input type="radio" id="working" name="classification" value="working">Working
                <input type="radio" id="specificNeeds" name="classification" value="specificNeeds">Youth w/Specific Needs
            </div>
            <div class="form-group">
                <h4><label for="specificNeedsType">Youth w/Specific Needs/ Leave it blank if not</label></h4>
                <input type="radio" id="disability" name="specificNeedsType" value="disability">Person w/Disability
                <input type="radio" id="conflict" name="specificNeedsType" value="conflict">Children in Conflict W/law
                <input type="radio" id="indigenous" name="specificNeedsType" value="indigenous">Indigenous People
            </div>
            <div class="form-group">
                <h4><label for="workStatus">WORK STATUS</label></h4>
                <input type="radio" id="employed" name="workStatus" value="Employed">Employed
                <input type="radio" id="unemployed" name="workStatus" value="Unemployed">Unemployed
                <input type="radio" id="selfEmployed" name="workStatus" value="Self-Employed">Self-Employed          
                <input type="radio" id="lookingForJob" name="workStatus" value="lookingForJob">Currently Looking for a job                
                <input type="radio" id="notInterested" name="workStatus" value="notInterested">Not interested in looking for a job
            </div>
            <div class="form-group">
                <h4><label for="educationalBackground">EDUCATIONAL BACKGROUND</label></h4>
                <input type="radio" id="elementaryUndergrad" name="educationalBackground" value="elementaryUndergrad">Elementary Undergraduate
                <input type="radio" id="elementaryGrad" name="educationalBackground" value="elementaryGrad">Elementary Graduate
                <input type="radio" id="highSchoolUndergrad" name="educationalBackground" value="highSchoolUndergrad">High school Undergraduate
                <input type="radio" id="highSchoolGrad " name="educationalBackground" value="highSchoolGrad">High school Graduate
                <input type="radio" id="seniorHighUndergrad " name="educationalBackground" value="seniorHighUndergrad">Senior High School Undergraduate
                <input type="radio" id="seniorHighGraduate" name="educationalBackground" value="seniorHighGraduate">Senior High School Graduate
                <input type="radio" id="vocationalGrad " name="educationalBackground" value="vocationalGrad">Vocational Graduate
                <input type="radio" id="collegeUndergrad " name="educationalBackground" value="collegeUndergrad">College Under Graduate
                <input type="radio" id="collegeGrad " name="educationalBackground" value="collegeGrad">College Graduate
                <input type="radio" id="masterLevel" name="educationalBackground" value="masterLevel">Master level
                <input type="radio" id="mastersGrad" name="educationalBackground" value="mastersGrad">Masters Graduate
                <input type="radio" id="doctorateLevel" name="educationalBackground" value="doctorateLevel">Doctorate level
                <input type="radio" id="doctorateGrad " name="educationalBackground" value="doctorateGrad">Doctorate Graduate
            </div class="form-group">
            <div class="form-group">
                <h4><label for="img">Please indicate your signature under printed name</label></h4>
                <input type="file" id="img" name="img" accept="image/*">
            </div>
            <button type="submit" value="submit">Submit</button>
            
        </form>
    </div>
</body>
</html>
