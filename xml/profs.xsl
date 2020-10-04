<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
<html>
<head>
<title>Profile Page</title>
</head>
<style>
.idcard{width:50%;margin:auto; } 
</style>
<body>
  <div class="idcard">
        <center>
        <span> <h3>Name:</h3> <xsl:value-of select="profile/user/name"/> </span>
        <span> <h3>Mobile Number:</h3> <xsl:value-of select="profile/user/mobile"/> </span>
        <span> <h3>Email ID</h3> <xsl:value-of select="profile/user/email"/> </span>
        <span> <h3>Linkedin Profile</h3> <xsl:value-of select="profile/user/linkedin"/> </span>
        <span> <h3>Interests</h3> <xsl:value-of select="profile/user/interests"/> </span>      
        </center>
  </div>  
</body>
</html>
</xsl:template>
</xsl:stylesheet>