<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
<html>
    <head>
        <title>Prescriptions</title>
    </head>
    
    <style>
        td { padding-right: 1em; }
        .details { font-family: ubuntu; display: inline-flex; padding-left: 1em; }
        .child { padding-top: 5em; }
       
    </style>
    
    <body style="background-color: #f6f6f7;">
    
        <div class="details">
    
        <h2 style="color: #4e5860;"><u>Prescription 1</u>:</h2>
        
        <div class="child"> 
        <img src="img/presc1.jpg" style="width: 20em; height: 30em; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" />
        </div>
        
        <div class="child" style="padding-left: 10em; font-size: 1.3em;">
        <p><b>Doctor's Name: </b> <xsl:value-of select="prescriptions/presc1/docname" /> </p>
        <p><b>Registration Number: </b> <xsl:value-of select="prescriptions/presc1/docregno" /> </p>
        <p><b>Hospital's Name: </b> <xsl:value-of select="prescriptions/presc1/hospitalname" /> </p>
        <p><b>Date: </b> <xsl:value-of select="prescriptions/presc1/date" /> </p>
        <p><b>Contact Number: </b> <xsl:value-of select="prescriptions/presc1/mobile" /> </p>
        <h4>Medicines Prescribed:</h4>
        
        <table border="1" style="margin-left: 2em;">
            <tr>
                <th>Name</th>
                <th>Dosage</th>
            </tr>
            <tr>
                <td><xsl:value-of select="prescriptions/presc1/meds/med1" /> </td>
                <td><xsl:value-of select="prescriptions/presc1/dosage/dosage1" /></td>
            </tr>
            <tr>
                <td><xsl:value-of select="prescriptions/presc1/meds/med2" /> </td>
                <td><xsl:value-of select="prescriptions/presc1/dosage/dosage2" /></td>
            </tr>
            <tr>
                <td><xsl:value-of select="prescriptions/presc1/meds/med3" /></td>
                <td><xsl:value-of select="prescriptions/presc1/dosage/dosage3" /></td>
            </tr>
        </table>
        
        </div>
        
        </div>
        
        <br> </br> <br> </br> <br> </br>
        <hr style="color: #70c2ed;"> </hr>
        
        <div class="details">
    
        <h2 style="color: #4e5860;"><u>Prescription 2</u>:</h2>
        
        <div class="child">
        <img src="img/presc2.jpg" style="width: 20em; height: 30em; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" />
        </div>
        <div class="child" style="padding-left: 10em; font-size: 1.3em;" >
       <p><b>Doctor's Name: </b> <xsl:value-of select="prescriptions/presc2/docname" /> </p>
        <p><b>Registration Number: </b> <xsl:value-of select="prescriptions/presc2/docregno" /> </p>
        <p><b>Hospital's Name: </b> <xsl:value-of select="prescriptions/presc2/hospitalname" /> </p>
        <p><b>Date: </b> <xsl:value-of select="prescriptions/presc2/date" /> </p>
        <p><b>Contact Number: </b> <xsl:value-of select="prescriptions/presc2/mobile" /> </p>
        <h4>Medicines Prescribed:</h4>
        
        <table border="1" style="margin-left: 2em;">
            <tr>
                <th>Name</th>
                <th>Dosage</th>
            </tr>
            <tr>
                <td><xsl:value-of select="prescriptions/presc2/meds/med1" /> </td>
                <td><xsl:value-of select="prescriptions/presc2/dosage/dosage1" /></td>
            </tr>
            <tr>
                <td><xsl:value-of select="prescriptions/presc2/meds/med2" /> </td>
                <td><xsl:value-of select="prescriptions/presc2/dosage/dosage2" /></td>
            </tr>
            <tr>
                <td><xsl:value-of select="prescriptions/presc2/meds/med3" /></td>
                <td><xsl:value-of select="prescriptions/presc2/dosage/dosage3" /></td>
            </tr>
        </table>
        </div>
        
        </div>
        <br> </br> <br> </br> <br> </br>
        <hr style="color: #70c2ed;"> </hr>
        
    </body>
</html>
</xsl:template>
</xsl:stylesheet>
