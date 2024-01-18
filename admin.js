function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.classList.add("active");
}

function toggleFAQ(faqID) {
  var faq = document.getElementById(faqID);
  faq.classList.toggle('active');
}

// Make the FAQs tab active by default and set other tabs to display: none initially
document.getElementById('faqs').style.display = 'block';
document.querySelector('.tablinks.active').classList.remove('active');
document.querySelector('.tablinks:nth-child(5)').classList.add('active');