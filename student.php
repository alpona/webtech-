<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE studentlist [

<!ELEMENT studentlist (student*)>
<!ELEMENT student 
(name,id,cgpa,courses+)>
<!ELEMENT name ( #PCDATA)>
<!ELEMENT id (#PCDATA)>
<!ELEMENT cgpa (#PCDATA)>
<!ELEMENT courses (course*,cname,csection,cgrade)>
]>


<studentlist>

  <student>
    <id>12-21211-2</id><br>
    <name>Sample Student</name><br>
    <cgpa>3.86 </cgpa><br>
    <courses>
		<course Number='1'>
				<cname>Web Tech</cname><br>
				<csection>B</csection><br>
				<cgrade>A+</cgrade><br>
			</course>
			<course Number='2'>
				<cname>Computer Graphics</cname><br>
				<csection>B</csection><br>
				<cgrade>A</cgrade><br>
			</course>
		</courses>
		

  </student>
  
   <student>
    <id>12-21221-2</id><br>
    <name>Sample Student 2</name><br>
    <cgpa>3.80 </cgpa><br>
    <courses>
		<course Number='1'>
				<cname>Web Tech</cname><br>
				<csection>B</csection><br>
				<cgrade>A+</cgrade><br>
			</course>
			<course Number='2'>
				<cname>Computer Graphics</cname><br>
				<csection>B</csection><br>
				<cgrade>A</cgrade><br>
			</course>
		</courses>
		

  </student>


  

    
</studentlist>