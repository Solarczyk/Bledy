console.log("Koordynaty");
let box = document.getElementsById("#moveMe");
document.getElementsById("#move").addEventListener('click', ()=>{
	console.log("Moving");
	box.style.position="absolute";
	box.style.top=150;
	box.style.left=150;
});
