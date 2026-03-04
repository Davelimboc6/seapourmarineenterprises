
import './topbar.js';
import { businessHours, initHeroAnimation, initAccreditations } from './hero';


window.businessHours = businessHours;

document.addEventListener('DOMContentLoaded', () => {
    initHeroAnimation();
    initAccreditations(); 
});
