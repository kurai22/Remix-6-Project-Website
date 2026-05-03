<div class="mb-8">
    <h3 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">
        Overview
    </h3>
    <div class="mt-2 h-1.5 w-20 bg-indigo-600 rounded-full"></div>
</div>

<div x-data="{
    autoplayIntervalTime: 4000,
    slides: [                
        {
            imgSrc: '../images/slide1.jpg',
            imgAlt: 'Illustration of a robot working at a computer while a human rests.',  
            title: 'The Evolution of Labor',
            description: 'As AI automates routine execution, the global workforce is shifting toward strategy, emotional intelligence, and complex problem-solving.',           
        },               
        {                    
            imgSrc: '../images/slide2.jpg',                    
            imgAlt: 'Illustration of a robot therapist assisting a person with a cluttered thought bubble.',  
            title: 'Augmenting Human Potential',
            description: 'Beyond simple automation, AI serves as a cognitive partner, processing massive datasets to help us navigate a more complex and interconnected world.',            
        }         
    ],            
    currentSlideIndex: 1,
    isPaused: false,
    autoplayInterval: null,
    previous() {                
        this.currentSlideIndex = this.currentSlideIndex > 1 ? this.currentSlideIndex - 1 : this.slides.length;                
    },            
    next() {                
        this.currentSlideIndex = this.currentSlideIndex < this.slides.length ? this.currentSlideIndex + 1 : 1;                
    },    
    autoplay() {
        this.autoplayInterval = setInterval(() => {
            if (!this.isPaused) this.next();
        }, this.autoplayIntervalTime)
    }
}" x-init="autoplay" class="relative w-full overflow-hidden rounded-2xl shadow-2xl bg-slate-900">
   
    <div class="relative min-h-[500px] md:min-h-[600px] w-full">
        <template x-for="(slide, index) in slides">
            <div x-cloak 
                 x-show="currentSlideIndex == index + 1" 
                 class="absolute inset-0" 
                 x-transition:enter="transition ease-out duration-700"
                 x-transition:enter-start="opacity-0 scale-105"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0">
                
                <div class="absolute inset-0 bg-black/40 z-10"></div>
                <img class="absolute w-full h-full inset-0 object-cover" 
                     :src="slide.imgSrc" :alt="slide.imgAlt" />

                <div class="absolute inset-0 z-20 flex flex-col items-center justify-center px-6 text-center">
                    <div class="bg-black/20 backdrop-blur-md p-8 rounded-3xl border border-white/10 max-w-2xl">
                        <h3 class="text-3xl md:text-5xl font-extrabold text-white mb-4 tracking-tight" 
                            x-text="slide.title"></h3>
                        <p class="text-lg md:text-xl text-slate-200 font-medium leading-relaxed" 
                           x-text="slide.description"></p>
                    </div>
                </div>
            </div>
        </template>
    </div>
    
    <button @click="previous()" class="absolute left-4 top-1/2 -translate-y-1/2 z-30 p-2 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur-md text-white transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
    </button>
    <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 z-30 p-2 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur-md text-white transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>

    <div class="absolute bottom-6 inset-x-0 z-30 flex items-center justify-center gap-6">
        <div class="flex items-center gap-3 bg-black/30 backdrop-blur-xl px-4 py-2 rounded-full border border-white/10">
            <template x-for="(slide, index) in slides">
                <button @click="currentSlideIndex = index + 1"
                        class="h-2 rounded-full transition-all duration-300"
                        :class="currentSlideIndex === index + 1 ? 'w-8 bg-white' : 'w-2 bg-white/40 hover:bg-white/60'">
                </button>
            </template>
        </div>

        <button type="button" @click="isPaused = !isPaused" class="text-white/70 hover:text-white transition">
            <svg x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M6.75 5.25a.75.75 0 0 1 .75.75v12a.75.75 0 0 1-1.5 0v-12a.75.75 0 0 1 .75-.75ZM17.25 5.25a.75.75 0 0 1 .75.75v12a.75.75 0 0 1-1.5 0v-12a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
            </svg>
            <svg x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</div>

<div class="pt-12 pb-8 max-w-3xl mx-auto text-center">
    <p class="text-lg leading-relaxed">
        The AI revolution is no longer a distant prospect—it is actively reshaping our industries and society. 
        <strong>This webpage examines the pivotal shifts</strong> defining this technological frontier.
    </p>
</div>