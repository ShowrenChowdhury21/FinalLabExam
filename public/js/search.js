  function search() {
	var input = document.getElementById("search");
	var filter = input.value.toUpperCase();
	var table = document.getElementById("table");
	var tr = table.getElementsByTagName("tr");

	for (i = 0; i < tr.length; i++){
	  td1 = tr[i].getElementsByTagName("td")[0];
	  td2 = tr[i].getElementsByTagName("td")[1];
	  td3 = tr[i].getElementsByTagName("td")[2];
	  if (td1 || td2) {
		var txtValue1 = td1.textContent || td1.innerText;
		var txtValue2 = td2.textContent || td2.innerText;
		var txtValue3 = td3.textContent || td3.innerText;
		if (txtValue1.toUpperCase().indexOf(filter) > -1 || (txtValue2.toUpperCase().indexOf(filter) > -1)|| (txtValue3.toUpperCase().indexOf(filter) > -1)) {
			tr[i].style.display = "";
		} else {
			tr[i].style.display = "none";
		}
	  }
	}
}
