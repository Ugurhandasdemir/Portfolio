tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        primary: "var(--color-primary)",
        "on-primary": "#ffffff",
        "primary-container": "#e2dfff",
        "on-primary-container": "#0f0069",
        secondary: "#515f74",
        "secondary-container": "#d5e3fd",
        "surface-bright": "#f7f9fb",
        "surface-pure": "#ffffff",
        "surface-container": "#eceef0",
        "surface-container-low": "#f2f4f6",
        "surface-variant": "#e0e3e5",
        "on-surface": "#191c1e",
        "on-surface-variant": "#464555",
        "outline-variant": "#c7c4d8",
        error: "#ba1a1a"
      },
      borderRadius: {
        DEFAULT: "0.125rem",
        lg: "0.25rem",
        xl: "0.5rem",
        full: "9999px"
      },
      spacing: {
        "margin-mobile": "16px",
        gutter: "24px",
        "margin-desktop": "48px",
        "section-gap": "160px",
        "container-max": "1280px",
        base: "8px"
      },
      fontFamily: {
        "body-md": ["Inter", "sans-serif"],
        "headline-md": ["Montserrat", "sans-serif"],
        "display-lg-mobile": ["Montserrat", "sans-serif"],
        "label-md": ["Inter", "sans-serif"],
        "display-lg": ["Montserrat", "sans-serif"],
        "body-lg": ["Inter", "sans-serif"],
        "label-sm": ["Inter", "sans-serif"],
        "headline-lg": ["Montserrat", "sans-serif"],
        "headline-sm": ["Montserrat", "sans-serif"],
        telemetry: ["JetBrains Mono", "monospace"]
      },
      fontSize: {
        "body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
        "headline-md": ["24px", { lineHeight: "32px", fontWeight: "600" }],
        "display-lg-mobile": ["40px", { lineHeight: "48px", letterSpacing: "-0.01em", fontWeight: "700" }],
        "label-md": ["14px", { lineHeight: "20px", letterSpacing: "0.01em", fontWeight: "500" }],
        "display-lg": ["64px", { lineHeight: "72px", letterSpacing: "-0.02em", fontWeight: "700" }],
        "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
        "label-sm": ["12px", { lineHeight: "16px", letterSpacing: "0.05em", fontWeight: "600" }],
        "headline-lg": ["32px", { lineHeight: "40px", fontWeight: "600" }],
        "headline-sm": ["20px", { lineHeight: "28px", fontWeight: "600" }]
      }
    }
  }
};
