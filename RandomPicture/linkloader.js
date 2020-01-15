function loadLink() {
    let link1 = Math.random().toString(36).substr(2, 3);
    let link2 = Math.floor(Math.random() * 1000)
    console.log(link1);
    console.log(link2);
    let full_link_end = link1 + link2;
    console.log(full_link_end);
    let start_link = "https://prnt.sc/";
    let full_link = start_link + full_link_end;
    console.log(full_link);
    return full_link;
}
function myFunction() {
    for(i = 0; i < 15; i++) {
        window.open(loadLink(), '_blank');
        
    }
}