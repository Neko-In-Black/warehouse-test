<template>
    <div class="absolute top-0 w-screen h-screen flex items-center justify-center ">
        <div class="w-full h-[90%] flex items-center rounded-2xl bg-gray-700 justify-center ">
            <div class="loader text-2xl"></div>
        </div>
    </div>
</template>
<style scoped>
.loader {
    width: fit-content;
    font-weight: bold;
    font-family: monospace;
    font-size: 30px;
    background: linear-gradient(135deg, #0000 calc(50% - 0.5em), #000 0 calc(50% + 0.5em), #0000 0) right/300% 100%;
    animation: l22 2s infinite;
}

.loader::before {
    content: "Loading...";
    color: #0000;
    padding: 0 5px;
    background: inherit;
    background-image: linear-gradient(135deg, #000 calc(50% - 0.5em), #fff 0 calc(50% + 0.5em), #000 0);
    -webkit-background-clip: text;
    background-clip: text;
}

@keyframes l22 {
    100% {
        background-position: left
    }
}
</style>
