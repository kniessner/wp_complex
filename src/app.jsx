import React from 'react';
import {render} from 'react-dom';

export const App = (data)=>{
   
class App extends React.Component {
  render () {
  	console.log(data);
    return (
    	<div id="react_port">
    		{data}
	    	<p> 
	    	Hello React!
	    	</p>
    	</div>
    	);
  }
}


render(<App/>, document.getElementById('app'));
}