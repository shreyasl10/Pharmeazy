<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
	<head>
		<title>Historical Users</title>
	</head>
	<style>
		.center{
		  padding: 70px 0;
          text-align: center;
		}
		table {
          border-collapse: collapse;
          width: 100%;
        }
        th,td {
          padding: 0.25rem;
          text-align: left;
          border: 1px solid #ccc; 
        }
        tbody tr:nth-child(odd) {
          background: #eee;
        }
	</style>
	<body>
		<div class="center">
			<table>
				<thead>
				  <tr>
					 <th>Name</th>
					 <th>Contact Number</th>
					<th>Email</th>
				  </tr>
			    </thead>
			    <tbody>
				  <tr>
					<td><xsl:value-of select="user/user_details1/name" /> </td>
					<td><xsl:value-of select="user/user_details1/mobile" /> </td>
					<td><xsl:value-of select="user/user_details1/email" /> </td>
				  </tr>
				  <tr>
					<td><xsl:value-of select="user/user_details2/name" /> </td>
					<td><xsl:value-of select="user/user_details2/mobile" /> </td>
					<td><xsl:value-of select="user/user_details2/email" /> </td>
				  </tr>
				  <tr>
					<td><xsl:value-of select="user/user_details3/name" /> </td>
					<td><xsl:value-of select="user/user_details3/mobile" /> </td>
					<td><xsl:value-of select="user/user_details3/email" /> </td>
				  </tr>
				  <tr>
					<td><xsl:value-of select="user/user_details4/name" /> </td>
					<td><xsl:value-of select="user/user_details4/mobile" /> </td>
					<td><xsl:value-of select="user/user_details4/email" /> </td>
				  </tr>
				  <tr>
					<td><xsl:value-of select="user/user_details5/name" /> </td>
					<td><xsl:value-of select="user/user_details5/mobile" /> </td>
					<td><xsl:value-of select="user/user_details5/email" /> </td>
				  </tr>
			  </tbody>
			</table>
		</div>
	</body>
</html>
</xsl:template>
</xsl:stylesheet>