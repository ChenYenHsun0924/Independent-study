cmake_minimum_required(VERSION 3.0)

project(Example_CartesianControl)
set(EXAMPLES_HOME ..//..//..)

set_property(GLOBAL PROPERTY USE_FOLDERS ON)

# Define command line options.
add_definitions(-DMODE=${MODE})
add_definitions(-DUNICODE)

# Choose architecture on UNIX
if (UNIX)
    add_definitions(-DARCH=${ARCH}) 
endif (UNIX)

# Build only x86 on Windows
if (WIN32)
    set(ARCH "x86")
endif (WIN32)

# Set build-specific configurations.
if(${MODE} STREQUAL "debug")
    set(CMAKE_BUILD_TYPE Debug)
    if (${ARCH} STREQUAL "x86")
    	set(CMAKE_RUNTIME_OUTPUT_DIRECTORY ${EXAMPLES_HOME}/Example_CartesianControl/Build/x86/Debug)
    else()
	set(CMAKE_RUNTIME_OUTPUT_DIRECTORY ${EXAMPLES_HOME}/Example_CartesianControl/Build/x64/Debug)
    endif()
elseif(${MODE} STREQUAL "release")
    set(CMAKE_BUILD_TYPE Release)
    if (${ARCH} STREQUAL "x86")
    	set(CMAKE_RUNTIME_OUTPUT_DIRECTORY ${EXAMPLES_HOME}/Example_CartesianControl/Build/x86/Release)
    else()
	set(CMAKE_RUNTIME_OUTPUT_DIRECTORY ${EXAMPLES_HOME}/Example_CartesianControl/Build/x64/Release)
    endif()
endif()

include_directories(${EXAMPLES_HOME}/_HEADERS)

add_executable(Example_CartesianControl ${EXAMPLES_HOME}/Example_CartesianControl/Sources/Example_CartesianControl.cpp)

if (UNIX)
    target_link_libraries(Example_CartesianControl ${CMAKE_DL_LIBS})
endif (UNIX)
