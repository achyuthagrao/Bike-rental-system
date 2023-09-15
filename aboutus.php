
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 100px;
  text-align: center;
  color: rgb(0, 0, 0);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}
button {
          background-color: #2194e0;
          color: white;
          padding: 14px 20px;
          margin: 8px 8px;
          border: none;
          cursor: pointer;
          width: 20%;
        }     

.button:hover {
  background-color: #555;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body background="Phramacy2.jpeg"> 
<div class="about-section">
  <h1>ABOUT US</h1>
  <p><br><font size="5">ABOUT PHARMACY</font></br>
    <br>Pharmacy is the clinical health science that links medical science with chemistry and it is charged with the discovery, production, disposal, safe and effective use, and control of medications and drugs. The practice of pharmacy requires excellent knowledge of drugs, their mechanism of action, side effects, interactions, mobility and toxicity. At the same time, it requires knowledge of treatment and understanding of the pathological process. Some specialties of pharmacists, such as that of clinical pharmacists, require other skills, e.g. knowledge about the acquisition and evaluation of physical and laboratory data.</br>
    <br>The scope of pharmacy practice includes more traditional roles such as compounding and dispensing of medications, and it also includes more modern services related to health care, including clinical services, reviewing medications for safety and efficacy, and providing drug information. Pharmacists, therefore, are the experts on drug therapy and are the primary health professionals who optimize the use of medication for the benefit of the patients.</br> 
    </p>
  <p><font size="3"><br>CONTACT US</br><br>ADDRESS-MANIPAL,UDUPI</br>
    <br>PHONE-12345678</br>
    <br>Email-akdex243@gmail.com</font></br>
  </p>
  <div>
    <p align="center"><label for="create new Account">
      <a href="Homepage.php">
        <p align="center"><button type="submit">BACK</button></p></a>
        </div>
</div>
</body>
</html>
