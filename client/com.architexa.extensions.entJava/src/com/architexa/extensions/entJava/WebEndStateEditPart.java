package com.architexa.extensions.entJava;

import org.eclipse.jface.resource.ImageDescriptor;
import org.openrdf.model.Resource;

import com.architexa.diagrams.model.Artifact;
import com.architexa.org.eclipse.draw2d.Label;
import com.architexa.store.ReloRdfRepository;

public class WebEndStateEditPart extends WebPathEditPart{
	
	@Override
	public ImageDescriptor getImageDescriptor(Artifact art, Resource typeRes,
			ReloRdfRepository repo) {
		return Activator.getImageDescriptor("/icons/circle_blue.png");
	}
	
	@Override
	protected Label getToolTip() {
		return new Label("End State");
	}

}
