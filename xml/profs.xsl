<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
<html>
<head>
<title>Profile Page</title>
</head>
<style>
.idcard{width:100%; } 
.cent{
  margin-left:25%;
  margin-top: 5%;
  padding: 10%;
  border: 3px solid black;
}
h3{
  font-size:25px;
}
h4{
  font-size:20px;
}
</style>
<body>
  <div class="idcard">
        <div class="cent" style="display:inline-block">
        <center>
         <h3> <strong><u> Name </u></strong> </h3> <h4><xsl:value-of select="profile/user/name"/></h4>
         <h3> <strong><u> Mobile Number </u></strong> </h3> <h4><xsl:value-of select="profile/user/mobile"/></h4>
         <h3> <strong><u> Email ID </u></strong> </h3> <h4><xsl:value-of select="profile/user/email"/></h4>
         <h3> <strong><u> Linkedin Profile </u></strong></h3> <h4><xsl:value-of select="profile/user/linkedin"/></h4>
         <h3> <strong><u> Interests </u></strong></h3> <h4> <xsl:value-of select="profile/user/interests"/></h4>
        </center></div>
  </div>  
</body>
</html>
</xsl:template>
</xsl:stylesheet>