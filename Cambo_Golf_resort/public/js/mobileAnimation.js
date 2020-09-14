


// Get modules.
var modules = document.getElementsByClassName('module');
// Translation offset.
// NOTE: This must match the CSS transform (ln 26). (Or move
// that into the JS.)
var offset = 150;

// Initialize visible modules.
updateModules();
// Scroll event handler.
window.addEventListener('scroll', updateModules);

// Check for visible modules.
function updateModules() {
  var remaining_modules = [];
  for (var i=0; i<modules.length; i++) {
    var mod = modules[i];
    var mod_bounds = mod.getBoundingClientRect();

    // If a remaining module is within [offset] pixels of the
    // bottom of the page, show it!
    if (mod_bounds.top-offset < window.innerHeight) {
      mod.classList.add('show');
    }
    else {
      remaining_modules.push(mod);
    }
  }
  // Track remaining modules and remove listener when none are left.
  modules = remaining_modules;
  if (!modules.length) {
    window.removeEventListener('scroll', updateModules);
  }
}

