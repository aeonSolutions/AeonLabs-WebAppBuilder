(function() {

  if (!window.__) {
    window.__ = {};
  }

  window.keyz = {
    special_keys: {
      8: "backspace",
      9: "tab",
      13: "return",
      16: "shift",
      17: "ctrl",
      18: "alt",
      19: "pause",
      20: "capslock",
      27: "esc",
      32: "space",
      33: "pageup",
      34: "pagedown",
      35: "end",
      36: "home",
      37: "left",
      38: "up",
      39: "right",
      40: "down",
      45: "insert",
      46: "del",
      96: "0",
      97: "1",
      98: "2",
      99: "3",
      100: "4",
      101: "5",
      102: "6",
      103: "7",
      104: "8",
      105: "9",
      106: "*",
      107: "+",
      109: "-",
      110: ".",
      111: "/",
      112: "f1",
      113: "f2",
      114: "f3",
      115: "f4",
      116: "f5",
      117: "f6",
      118: "f7",
      119: "f8",
      120: "f9",
      121: "f10",
      122: "f11",
      123: "f12",
      144: "numlock",
      145: "scroll",
      191: "/",
      224: "meta"
    },
    shift_nums: {
      "`": "~",
      "1": "!",
      "2": "@",
      "3": "#",
      "4": "$",
      "5": "%",
      "6": "^",
      "7": "&",
      "8": "*",
      "9": "(",
      "0": ")",
      "-": "_",
      "=": "+",
      ";": ": ",
      "'": "\"",
      ",": "<",
      ".": ">",
      "/": "?",
      "\\": "|"
    },
    key_bindings: {},
    keyHandler: function(e) {
      var char, modif, possible, special;
      special = this.special_keys[e.which];
      char = String.fromCharCode(e.which).toLowerCase();
      possible = [];
      modif = '';
      if (e.altKey && special !== 'alt') {
        modif += "alt+";
      }
      if (e.ctrlKey && special !== 'ctrl') {
        modif += "ctrl+";
      }
      if (e.metaKey && !e.ctrlKey && special !== "meta") {
        modif += "meta+";
      }
      if (e.shiftKey && special !== 'shift') {
        modif += "shift+";
      }
      if (special) {
        possible.push(modif + special);
      } else {
        possible.push(modif + char);
        if (modif === 'shift+') {
          possible.push(this.shift_nums[char]);
        }
      }
      for ( var i = 0; i < possible.length; i++ ) {
      if ( this.key_bindings[ possible[i] ] ) {
        binding_return = this.key_bindings[ possible[i] ].apply( this, arguments );

        if (binding_return === false) {
          if (e.preventDefault)
            e.preventDefault();
          if (e.stopPropagation)
            e.stopPropagation();
        }
      }
    };

    }
  };

  document.addEventListener('keydown', function(e) {
    if (!__.ui.embedded) {
      return keyz.keyHandler(e);
    }
  }, true);

  var sendKeyz = function(e) {
    var to_send = {
      e: {
        which: e.which,
        metaKey: e.metaKey,
        altKey: e.altKey,
        ctrlKey: e.ctrlKey,
        shiftKey: e.shiftKey
      },
      action: 'keyz'
    };

    window.parent.postMessage(
      JSON.stringify(to_send),
      window.post_message_origin
    );

    return false;
  };

  keyz.key_bindings = {
    'ctrl+s': sendKeyz,
    'alt+n': sendKeyz,
    'ctrl+1': sendKeyz,
    'ctrl+2': sendKeyz,
    'ctrl+3': sendKeyz,
    'ctrl+0': sendKeyz,
    'ctrl+d': sendKeyz,
    'alt+e': sendKeyz,
    'ctrl+p': sendKeyz,
    'ctrl+h': sendKeyz,
    'alt+v': sendKeyz,
    'alt+h': sendKeyz,
    'alt+p': sendKeyz
  };

}).call(this);