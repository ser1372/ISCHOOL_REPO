<template>
	<div class="flex justify-center items-center absolute top-0 left-0 right-0 bottom-0">
		<div class="loader"></div>
	</div>
</template>

<style scoped>
.loader {
	z-index: 105;
	width: 100px;
	height: 100px;
	border: 3px solid #814AF1;
	border-radius: 50%;
	animation: spin 7s ease-in-out;
	animation-iteration-count: infinite;
	transition-duration: 0.1s;
	box-shadow: 0 0 15px rgba(255, 255, 255, 0.7); /* adds a white glow around the loader */
}

.loader:hover {
	transform: scale(0.95);
}

.loader:active {
	transform: scale(1.2);
}

@keyframes spin {
	0% {
		transform: rotate(0deg);
		border-bottom: solid 3px transparent;
		border-top: solid 3px transparent;
	}
	50% {
		transform: rotate(1800deg);
		border: 3px solid white;
		border-left: solid 3px transparent;
		border-right: solid 3px transparent;
	}
	100% {
		transform: rotate(0deg);
		border-bottom: solid 3px transparent;
		border-top: solid 3px transparent;
	}
}
</style>
