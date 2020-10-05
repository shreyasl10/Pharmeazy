<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
<html>
    <head>
        <title>Prescriptions</title>
    </head>
    
    <style>
        td { padding-right: 1em; }
        .details { font-family: ubuntu; }
    </style>
    
    <body>
    
        <div class="details">
        <center>
    
        <h3><u>Prescription 1:</u></h3>
        
        <img src="img/presc1.jpg" style="width: 20em; height: 30em;" />
        
        <p><b>Doctor's Name: </b> <xsl:value-of select="prescriptions/presc1/docname" /> </p>
        <p><b>Registration Number: </b> <xsl:value-of select="prescriptions/presc1/docregno" /> </p>
        <p><b>Date: </b> <xsl:value-of select="prescriptions/presc1/date" /> </p>
        <p><b>Contact Number: </b> <xsl:value-of select="prescriptions/presc1/mobile" /> </p>
        <h4>Medicines Prescribed:</h4>
        
        <table>
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
        </center>
        <br> </br>
        <hr> </hr>
        </div>
        
        <div class="details">
        <center>
    
        <h3><u>Prescription 2:</u></h3>
        
        <img src="img/presc2.jpg" style="width: 20em; height: 30em;" />
        
        <h4>Doctor's name:</h4> <xsl:value-of select="prescriptions/presc2/docname" />
        <p><b>Registration Number: </b> <xsl:value-of select="prescriptions/presc2/docregno" /> </p>
        <p><b>Date: </b> <xsl:value-of select="prescriptions/presc2/date" /> </p>
        <p><b>Contact Number: </b> <xsl:value-of select="prescriptions/presc2/mobile" /> </p>
        <h4>Medicines Prescribed:</h4>
        
        <table>
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
        </center>
        <br> </br>
        <hr> </hr>
        </div>
        
        
    </body>
</html>
</xsl:template>
</xsl:stylesheet>
