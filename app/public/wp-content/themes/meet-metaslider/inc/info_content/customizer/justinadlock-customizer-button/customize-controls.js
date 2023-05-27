(function (api) {
  // Extends our custom "meet-metaslider" section.
  api.sectionConstructor["meet-metaslider"] = api.Section.extend({
    // No events for this type of section.
    attachEvents: function () {},

    // Always make the section active.
    isContextuallyActive: function () {
      return true;
    },
  });

  // Extends our custom "meet-metaslider" section.
  api.controlConstructor["meet_metaslider_control"] = api.Control.extend({
    // No events for this type of section.
    attachEvents: function () {},

    // Always make the section active.
    isContextuallyActive: function () {
      return true;
    },
  });
})(wp.customize);
