import React from 'react';
import {render} from 'react-dom';

export const app_loader = (data)=>{
   
class App extends React.Component {
  render () {
  	console.log('app got data',data);
    return (
    	<div id="react_port">
    		
	    	<p> 
	    	Hello React!
	    	</p>
    	</div>
    	);
  }
}


render(<App/>, document.getElementById('app'));
}