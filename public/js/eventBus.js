// Définir EventBus
const EventBus = {
  events: {},
  on: function (event, listener) {
    if (!this.events[event]) {
      this.events[event] = [];
    }
    this.events[event].push(listener);
  },
  emit: function (event, data) {
    if (this.events[event]) {
      this.events[event].forEach(function (listener) {
        listener(data);
      });
    }
  },
};

// Rendre EventBus globalement accessible
window.EventBus = EventBus;
