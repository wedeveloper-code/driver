import { resolve } from 'path'
import { defineConfig } from 'vite'

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        about: resolve(__dirname, 'about.html'),
        programs: resolve(__dirname, 'programs.html'),
        cdl: resolve(__dirname, 'cdl.html'),
        heavyEquipment: resolve(__dirname, 'heavy-equipment.html'),
        diesel: resolve(__dirname, 'diesel-mechanics.html'),
        nccer: resolve(__dirname, 'nccer.html'),
        driverImprovement: resolve(__dirname, 'driver-improvement.html'),
        admissions: resolve(__dirname, 'admissions.html'),
        careerPlacement: resolve(__dirname, 'career-placement.html'),
        contact: resolve(__dirname, 'contact.html'),
        directions: resolve(__dirname, 'directions.html'),
      }
    }
  }
})
