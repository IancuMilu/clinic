const box = document.getElementById('prog');

//  Change text color on mouseover
box.addEventListener('mouseover', function handleMouseOver() {
    box.style.fontWeight = '700';
    box.style.color = '#E58100';
});

//  Change text color back on mouseout
box.addEventListener('mouseout', function handleMouseOut() {
    box.style.fontWeight = '500';
    box.style.color = '#8181C1';
});